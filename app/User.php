<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    //
    //protected $connection ='connectUser';

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*
    protected $fillable = [
        'name', 'email', 'password',
    ];*/

    protected $fillable = [
        'email', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /*
    protected $hidden = [
        'password', 'remember_token',
    ];*/

    public function notes(){
        return $this ->hasMany(Note::class);
    }

    public function logs(){
        return $this ->hasMany(Log::class);
    }

    public function role(){
        return $this -> belongsTo('App\Role');

    }

    public function hasRole($role){
        if($this->role()->where('name', $role)->first()){
            return true;
        }
        return false;
    }

    public function checkSuperAdmin()
    {
        if ($this && $this->role->id == 2)
        {
            return true;
        }
            return false;
    }

}
