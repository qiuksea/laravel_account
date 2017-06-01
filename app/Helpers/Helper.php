<?php // Code within app\Helpers\Helper.php

//http://stackoverflow.com/questions/28290332/best-practices-for-custom-helpers-on-laravel-5
#Custom Classes in Laravel 5, the Easy Way
#http://itsolutionstuff.com/post/laravel-5-custom-helper-facade-class-example-from-scratchexample.html
namespace App\Helpers;

use App\Country;

class Helper
{
    // account.blade.php
    public static function display_boolean($input_val)
    {	
    	if (isset($input_val)){
    		return ($input_val)==1? 'Yes':'No';    
    	}
    }

    // form.blade.php
    public static function display_radio_checked($val1, $val2, $val3)
    {
    	    if ($val1 == $val3){
              return 'checked';
            }
                   
            if (isset($val2) && ($val2 == $val3) ) {
              return 'checked';
            }

            
    }

    // form.blade.php
    public static function display_checkbox_checked($val1, $val2, $val3)
    {

            if($val1 == $val3){
                return 'checked';
            }
                 
            if($val2 && $val2 == $val3){
                return 'checked';
            }
            
    }

    // form,blade.php
    public static function display_dropdown_selected($val1, $val2, $val3)
    {
           if ($val1 == $val2){

                return 'selected="selected"';
           }
                    
         
            if ( isset($val3) && ($val1 == $val3) ){

                return 'selected="selected"';

            }
        
    }
    
    //controller create/edit
    public static function eu_countries(){
        $eu_countries = Country::where('is_eu', '1')->get();
        
        //dd($eu_countries); #- dump & die - testing purpose

        return $eu_countries;
    }

    public static function non_eu_countries(){
       
        $non_eu_countries = Country::where('is_eu', '0')->get();
        //dd($eu_countries); #- dump & die - testing purpose

        return $non_eu_countries;
    }


    // account.blade.php
    public static function display_status(string $input_val)
    {   
        if (isset($input_val)){

            switch($input_val){
                case 'N':
                    echo "New";
                    break;
                case 'P': 
                    echo "Pending";
                    break;
                case 'A':
                    echo "Await credit check";
                    break;
                case 'Y':
                    echo "Complete";
                    break;
                default:
                    echo "No status";

            } //switch

        }//if

    } //display_status





} //class Helpers