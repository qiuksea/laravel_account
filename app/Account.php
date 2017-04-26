<?php

namespace App;

#use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    // protected $guarded = []; opisite $fillable
    protected $fillable = ['name', 'tel', 'email', 'project_10k', 'is_stu','notes'];

    
}
