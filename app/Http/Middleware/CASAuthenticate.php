<?php

namespace App\Http\Middleware;

use Closure;
use Cas;
use Auth;
use App\User;


class CASAuthenticate
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
        if(!Auth::check()){

            //CAS login
            Cas::authenticate();

            $uid = Cas::getCurrentUser();

            if ($uid){

//Functions inside of a class are not global functions, You need to use  $this->functioName() instead.
                        $entries = $this->connect_ldap($uid); //LDAP connection to get user info

                        $email = $entries[0]["mail"][0]; 
                
                        if ($email){

                            $firstname = $entries[0]["givenname"][0];

                            $lastname = $entries[0]["sn"][0];

                            $user_type = $entries[0]["shefucardtype"][0];

                            $department = $entries[0]["shefreportingfaculty"][0];

                            $user = User::where('email', $email)->first();
                           
                            if ($user) #if the user in the 'users' table, he/she is allowed to access the project
                            {
                          
                                $vars = [
                                    "email" => $email,                                 
                                    "uid" =>  $uid,
                                    "firstname" => $firstname,
                                    "lastname"  => $lastname,
                                    "user_type"  => $user_type,
                                    "department" => $department,
                                    "role_id" => $user->role_id                        
                                ]; // store in user array

                                session()->put('user_info', $vars);

                                Auth::login($user); 

                            } else {

                                session()->put('login_error','You have no permission for this site.');

                            } //if ($user)                              

                        } //!empty($email)   

            }// if ($uid)  
           
        } //if(!Auth::check())

            return $next($request);        

    } //function handle

    // LDAP connection 
    private function connect_ldap($uid){

        //LDAP get user information
                $ldapconn = ldap_connect("auth.shef.ac.uk", 389) or die("Could not connect to LDAP server."); #143.167.1.6

                if ($ldapconn) {

                    // binding anonymously
                    $ldapbind = ldap_bind($ldapconn);

                    if ($ldapbind) {

                        echo "LDAP bind anonymous successful...";

                        $dn = "ou=Users,dc=sheffield,dc=ac,dc=uk";

                        $filter = "(uid=$uid*)";

                        $attributesNeed = array("shefreportingfaculty", "shefucardtype", "ou", "mail", "givenname", "sn", "uid");

                        $result =ldap_search($ldapconn, $dn, $filter, $attributesNeed, 0, 2) or exit("unable to search"); 

                        $entries = ldap_get_entries($ldapconn, $result);                  

                        ldap_close($ldapconn);  

                        return $entries;

                    } //($ldapbind)

                } //if ($ldapconn)  
                else {

                    echo "LDAP bind anonymous failed...";

                }//if ($ldapconn)    

    } //connect_ldap($uid)

} //class CASAuthenticate
