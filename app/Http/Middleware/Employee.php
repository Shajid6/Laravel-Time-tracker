<?php
/*
* Workday - A time clock application for employees
* Email: shajidaka@gmail.com
* Author: Shajid Ahmed
*/
namespace App\Http\Middleware;
use Auth;
use Closure;

class Employee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $t = \Auth::user()->acc_type;
        
        if ($t == 1 || $t == 2) 
        {
            // nothing
        } else {
            Auth::logout(); 
            return redirect()->route('denied');
        }

        return $next($request);
    }
}
