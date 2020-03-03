<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
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
        $role = "";
        if(Auth::check())
        {
            foreach(Auth::user()->roles as $role)
            {
                $role = $role->name;
            }
        }else{
            return redirect('/');
        }
        
        if(Auth::check() && ($role == 'admin' || $role == ''))
            return $next($request);
        else
            return redirect('/');
    }
}
