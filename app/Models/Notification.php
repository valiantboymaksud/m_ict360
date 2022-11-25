<?php

namespace App\Models;

use App\Http\Traits\SendPushNotification;
use Illuminate\Support\Facades\App;


class Notification extends Model
{
    use SendPushNotification;



    public static function boot()
    {
        parent::boot();

        if (!App::runningInConsole()) {
            static::created(function ($model) {
                SendPushNotification::webPush(request('tokens'), $model);
            });
        }
    }
}
