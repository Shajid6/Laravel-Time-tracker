<?php

namespace App\Http\Controllers;

use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   

    public function index(Request $request)
    {

        /*$ip = '162.159.24.227'; /* Static IP address */
        $ip = $request->ip();
        $currentUserInfo = Location::get($ip);

        return view('Home.home', compact('currentUserInfo'));
    }
    
}
