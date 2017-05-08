<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//to make it work , remove db config from .env - http://stackoverflow.com/questions/42670744/two-database-connect-in-laravel
/* 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_income_account
DB_USERNAME=root
DB_PASSWORD=''
*/
class CountryOld extends Model
{
    //
    protected $connection ='oldAccount';

    protected $table = 'country_cou';
}
