<?php

namespace App\Http\Traits;

use App\Models\Subscriber;

trait SendPushNotification

{
    public static function webPush($tokens = [], $notification)
    {
        if (count($tokens ?? []) == 0) {
            $tokens = Subscriber::where('status', 1)->pluck('fcm_token')->toArray();
        }
        // $tokens = ['eTzZO0ZLdvSk-gc70FZUPi:APA91bGKlTmzs0mTrqu765VFTlOs-kJl6gDpAogXNg2Ui5wyWzXqdZZ5n_L9EaI_Hp6sUScBMawd62bzntoz7OHCR7KQmKATaNTKg1KAjuDIEGELJslfrYNndidXZ1AonOWT_US8TRhN'];

        $data = [
            "registration_ids" => $tokens,
            "notification" =>
            [
                "title" => $notification->title,
                "body"  => $notification->description,
                // "icon"  => asset($notification->image),
            ],
        ];
        $dataString = json_encode($data);

        $headers = [
            'Authorization: key=AAAAPqzphTk:APA91bEv0dVZ0ISFLX8pTirpbN8EzG06PVB3BObX_JukjO0cbgpKNu7RKk8MHau0nKa8PT0emEbi8ysg2W6mxcuqPwEQPntq9GDLqzbloNw4HAhX2zCLEqSRc8qI489LufseHLg7xe9p',
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
        
        $response = curl_exec($ch);

        return $response;
    }
}
