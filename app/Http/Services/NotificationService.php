<?php
namespace App\Http\Services;

use App\Http\Traits\FileSaver;
use App\Models\Notification;

class NotificationService
{
    use FileSaver;


    public $notification;
    public $request;


    public function __construct() {
        $this->request = request();
    }


    public function store()
    {

       $this->notification = Notification::create([
            'title'         => $this->request->title,
            'description'   => $this->request->description,
            'schedule_at'   => $this->request->schedule_at,
        ]);

        $this->upload_file($this->request->image, $this->notification, 'image', 'notifications');


        return $this->notification;
    }




    public function update()
    {
       $this->notification = Notification::create([
            'title'         => $this->request->title,
            'description'   => $this->request->description,
            'schedule_at'   => $this->request->schedule_at,
        ]);


        return $this->notification;
    }
}