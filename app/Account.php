<?php

namespace App;

#use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    // protected $guarded = []; opisite $fillable
    protected $fillable = ['name', 'tel', 'email', 'is_over_10k', 'who_credit_check', 'is_student','notes'];

    
}
