<?php 

use App\Models\Notification;
use App\Models\User;
use App\Models\FrontSetting;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\Session;

function notificationMsg($type, $message){
    \Session::put($type, $message);
}

function sendNotification($actionType, $message){

    $user = auth()->user();
    $finalMessage = "";

    switch ($actionType) {
        case 0:
            $finalMessage = "Created ".$message;
            break;

        case 1:
            $finalMessage = "Updated ".$message;
            break;

        case 2:
            $finalMessage = "Deleted ".$message;
            break;

        default:
            $finalMessage = "Something went wrong.";
            break;
    }

    $users = User::where('id', '!=', $user->id)->where('notification_status', 1)->get();

    if(!empty($users) && $users->count() > 0){
        foreach($users as $key => $value){
            Notification::create([
                'sender_id' => $user->id,
                'receiver_id' => $value->id,
                'message' => $finalMessage,
                'action_type' => $actionType
            ]);
        }
    }
}

function showNotification($user){
    $notifications = Notification::where('notifications.receiver_id', $user->id)
                ->join('users', 'notifications.sender_id', '=', 'users.id')
                ->select('notifications.*', 'users.name as sender_name')
                ->latest('notifications.created_at')
                ->take(4)
                ->get();


    $newNotificationCount = Notification::where('receiver_id', $user->id)
                        ->where('is_read', 0)
                        ->count();

    return [
        'notifications' => $notifications,
        'newNotificationCount' => $newNotificationCount
    ];
}

function dateHumanFormate($date){
    $createdAt = $date;
    $now = now();
    $diff = $createdAt->diff($now);

    if ($diff->y > 0) {
        $timeAgo = $diff->y . ' yr. ago';
    } elseif ($diff->m > 0) {
        $timeAgo = $diff->m . ' mo. ago';
    } elseif ($diff->d > 0) {
        $timeAgo = $diff->d . ' day(s) ago';
    } elseif ($diff->h > 0) {
        $timeAgo = $diff->h . ' hr. ago';
    } elseif ($diff->i > 0) {
        $timeAgo = $diff->i . ' min. ago';
    } else {
        $timeAgo = 'Just now';
    }

    return $timeAgo;
}

function uploadImagePublic($path, $file){
    $filename = time() . '_' . $file->getClientOriginalName();

    // Create the directory if it doesn't exist
    if (!file_exists($path)) {
        mkdir($path, 0755, true);
    }
    $file->move($path, $filename);

    return $filename;
}

function makeSlug($name){
    $slug = Str::slug($name);
    return $slug;
}

function setLanguage($language){
    Session::put('language', $language);
}

function getLanguage($text, $language){
    $language = GoogleTranslate::trans($text, $language);
    return $language;
}

function getDateYMDToDMY($date)
{
    if ($date == '0000-00-00 00:00:00') {
        return '';
    }
    return Carbon::parse($date)->format('d/m/Y');
}

function limitText($text, $limit)
{
    return Str::limit($text, $limit);
}