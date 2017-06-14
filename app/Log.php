<?php

namespace App;


class Log extends Model
{
    //
     //
    public function account(){
    	return $this -> belongsTo(Account::class);
    }

}
