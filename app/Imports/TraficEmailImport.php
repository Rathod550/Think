<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Illuminate\Support\Facades\Validator;
use App\Models\TraficEmail;

class TraficEmailImport implements ToCollection, WithHeadingRow, SkipsEmptyRows
{
    public $tmpNumbers2 = [];
    public $reason = [];

    public function collection(Collection $collection)
    {
        if ($collection->isEmpty()) {
            $this->reason[1] = 'The uploaded file is empty or contains only empty rows.';
            return;
        }

        $rowsFirstArray = $collection[0]->toArray();


        if (!array_key_exists('email', $rowsFirstArray)) {
            $this->reason[1] = 'The Email Title Is Wrong, Or Title Is Missing';
            return;
        }

        $data = $collection->toArray();

        $emails = [];
        $duplicateEmailsInSheet = [];

        foreach ($data as $key => $row) {
            $email = isset($row['email']) ? trim($row['email']) : '';
            $data[$key]['email'] = $email;

            // Check for duplicates in the same sheet
            if (isset($emails[$email])) {
                $duplicateEmailsInSheet[$key] = "Duplicate email in the file: {$email}";
            } else {
                $emails[$email] = true;
            }
        }

        // Manual validation for duplicate emails in the sheet
        if (!empty($duplicateEmailsInSheet)) {
            foreach ($duplicateEmailsInSheet as $row => $message) {
                $this->reason[$row + 1] = $message; // +1 to match Excel row number
            }
            return;
        }

        // Check for existing emails in the database
        Validator::make($data, [
            '*.email' => function($attribute, $value, $onFailure) {
                if (!empty($value)) {
                    $exists = TraficEmail::where('email', $value)->exists();
                    if ($exists) {
                        $onFailure("Email already exists in the system: {$value}");
                    }
                }
            }
        ])->validate();

        // Import logic
        foreach ($data as $row) {
            if (!empty($row['email'])) {
                TraficEmail::create(['email' => $row['email']]);
            }
        }
    }
}
