<?php

namespace App\Http\Controllers\Backend;

use App\Models\Subscriber;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['total_notification'] = Notification::count();
        $data['total_subscriber'] = Subscriber::count();
        return view('backend.home.index', $data);
    }
}
