<?php

namespace App\Http\Middleware;

use Closure;

use App\User;

use Auth;

class IsSuperAdmin
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
      
        if (Auth::user() && Auth::user()->role->id == 2) {
            return $next($request);
        }

            return redirect('/')->with('warning','You can\'t access');
    }
}
