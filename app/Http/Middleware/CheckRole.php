<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

use Session;

use App\User;

class CheckRole
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
        if (session()->has('user_info')) {

            $email = trim(session('user_info.email')); 

            $user = User::where('email', $email)->first(); 

            if ($user) {

                Auth::login($user);   

                return $next($request);              

            } else {

                return response()->view('/dashboard'); #https://laracasts.com/discuss/channels/general-discussion/disable-global-verifycsrftoken-and-use-as-middleware-doesnt-work-setcookie-on-null?page=1   

            } //if ($user)

        } //if (session()->has('user_info'))       

       
    }
}
