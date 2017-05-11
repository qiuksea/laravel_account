<?php // Code within app\Helpers\Helper.php

//http://stackoverflow.com/questions/28290332/best-practices-for-custom-helpers-on-laravel-5
#Custom Classes in Laravel 5, the Easy Way
namespace App\Helpers;

class Helper
{
    // account.blade.php
    public static function display_boolean(int $input_val)
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
        //old('$oldvalue') == $val2
}