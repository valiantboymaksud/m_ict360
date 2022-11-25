<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    
    public function index()
    {
        $data['notifications'] = Notification::query()->paginate(24);
        return view('index', $data);
    }
}
