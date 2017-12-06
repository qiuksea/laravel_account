<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use Cas;
use Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    //
     protected $redirectPath = '/';
      /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('cas', ['only' => ['CASLogin']]);
    }

    public function CASLogin(Request $request)
    {

        if (session()->has('user_info')){
			 
			session()->forget('login_error');		       	     

        } 
        return redirect('/'); #->with('user_info', session('user_info')); 

        #https://stackoverflow.com/questions/34488194/set-session-variables-in-laravel
        #$email = session('user_info.email'); 
        #dd(session()->all());
    }

    //logout CAS, Session destroyed
     public function Logout()
    {
        Auth::logout(); 
        return redirect('/auth/caslogout');
    }

    //logout the app, session is still in
    public function CASLogout()
    {
        CAS::logout(); 
    
        return redirect('/');
    }

}
