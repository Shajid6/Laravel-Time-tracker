<?php
/*
* Workday - A time clock application for employees
* Email: shajidaka@gmail.com
* Author: Shajid Ahmed
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function AuthRouteAPI(Request $request) 
    {
        return $request->user();
    }
}
