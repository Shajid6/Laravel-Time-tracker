<?php
/*
* Workday - A time clock application for employees
* Email: shajidaka@gmail.com
* Author: Shajid Ahmed
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LanguageController extends Controller
{
    public function lang($locale) 
    {
        App::setLocale($locale);
        session()->put('locale', $locale);

        if ($locale != null) {
            $path = base_path('.env');
            $lang = env('APP_LOCALE');
            
            if(file_exists($path)) 
            {
                file_put_contents($path, str_replace("APP_LOCALE=$lang", "APP_LOCALE=$locale", file_get_contents($path)));
            }
        }

        return redirect()->back();
    }
}
