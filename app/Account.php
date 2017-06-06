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

    public function scopeAllStatus($query, $val) {

    	#$val = 'N', 'P', 'A', 'Y', 'R'
    	#Call App\Account::allStatus('P')->get();

    	return $query->where('status', $val);

    }
    
}
