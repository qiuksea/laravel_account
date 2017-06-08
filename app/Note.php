<?php

namespace App;

class Note extends Model
{
    //
    public function account(){
    	return $this -> belongsTo(Account::class);
    }
}
