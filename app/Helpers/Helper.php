<?php // Code within app\Helpers\Helper.php

//http://stackoverflow.com/questions/28290332/best-practices-for-custom-helpers-on-laravel-5
#Custom Classes in Laravel 5, the Easy Way
namespace App\Helpers;

class Helper
{
    // boolean
    public static function display_boolean(int $input_val)
    {	
    	if (isset($input_val)){
    		return ($input_val)==1? 'Yes':'No';    
    	}
    }
        
}