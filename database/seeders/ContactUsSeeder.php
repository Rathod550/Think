<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FrontSetting;
use Carbon\Carbon;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Our Headquarters',
                'slug' => 'our-headquarters',
                'value_english' => getLanguage('OUR HEADQUARTERS', 'en'),
                'value_hindi' => getLanguage('OUR HEADQUARTERS', 'hi'),
                'value_gujrati' => getLanguage('OUR HEADQUARTERS', 'gu'),
                'page_name' => 'ContactUs'
            ],
            [
                'name' => 'Our Headquarters Content',
                'slug' => 'our-headquarters-content',
                'value_english' => getLanguage('Melbourne, Australia', 'en'),
                'value_hindi' => getLanguage('Melbourne, Australia', 'hi'),
                'value_gujrati' => getLanguage('Melbourne, Australia', 'gu'),
                'page_name' => 'ContactUs'
            ],
            [
                'name' => 'Speak To Us',
                'slug' => 'speak-to-us',
                'value_english' => getLanguage('Speak To Us', 'en'),
                'value_hindi' => getLanguage('Speak To Us', 'hi'),
                'value_gujrati' => getLanguage('Speak To Us', 'gu'),
                'page_name' => 'ContactUs'
            ],
            [
                'name' => 'Speak To Us Content',
                'slug' => 'speak-to-us-content',
                'value_english' => getLanguage('(123) 456 7890', 'en'), 
                'value_hindi' => getLanguage('(123) 456 7890', 'hi'),
                'value_gujrati' => getLanguage('(123) 456 7890', 'gu'),
                'page_name' => 'ContactUs'
            ],
            [
                'name' => 'Make A Video Call',
                'slug' => 'make-a-video-call',
                'value_english' => getLanguage('MAKE A VIDEO CALL', 'en'),
                'value_hindi' => getLanguage('MAKE A VIDEO CALL', 'hi'),
                'value_gujrati' => getLanguage('MAKE A VIDEO CALL', 'gu'),
                'page_name' => 'ContactUs'
            ],
            [
                'name' => 'Make A Video Call Content',
                'slug' => 'make-a-video-call-content',
                'value_english' => getLanguage('CanvasOnSkype', 'en'),
                'value_hindi' => getLanguage('CanvasOnSkype', 'hi'),
                'value_gujrati' => getLanguage('CanvasOnSkype', 'gu'),
                'page_name' => 'ContactUs'
            ],
            [
                'name' => 'Follow On Twitter',
                'slug' => 'follow-on-twitter',
                'value_english' => getLanguage('FOLLOW ON TWITTER', 'en'),
                'value_hindi' => getLanguage('FOLLOW ON TWITTER', 'hi'),
                'value_gujrati' => getLanguage('FOLLOW ON TWITTER', 'gu'),
                'page_name' => 'ContactUs'
            ],
            [
                'name' => 'Follow On Twitter Content',
                'slug' => 'follow-on-twitter-content',
                'value_english' => getLanguage('2.3M Followers', 'en'),
                'value_hindi' => getLanguage('2.3M Followers', 'hi'),
                'value_gujrati' => getLanguage('2.3M Followers', 'gu'),
                'page_name' => 'ContactUs'
            ],
        ];

        foreach ($data as $key => $value) {

            $find = FrontSetting::where('slug', $value['slug'])->first();

            if (is_null($find)) {
                FrontSetting::create($value);
            } else {
                $find->update($value);
            }
        }
    }
}
