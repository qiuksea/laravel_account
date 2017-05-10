<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $table = 'countries';
    protected $fillable = [];

    public $timestamps = false;

   public function accounts()
   {

   	return $this -> hasMany(Account::class);

   }
}
