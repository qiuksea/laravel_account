<?php

namespace App;

class Note extends Model
{
    //
    public function account(){
    	return $this -> belongsTo(Account::class);
    }

    public function user(){
    	return $this -> belongsTo('App\User')->withDefault([

        					'name' => 'Guest Author',

    					]);
    }

    
}
