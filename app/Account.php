<?php

namespace App;

#use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    // protected $guarded = []; opisite $fillable
    //protected $fillable = [];

 	public function country()
    {
    	return $this -> belongsTo(Country::class, 'company_country_id');
    }
    
}
