<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\CountryOld;
use App\Country;
// import old data to new table - https://laracasts.com/discuss/channels/general-discussion/laravel-5-convert-mysql-to-migration?page=1

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $countriesData = CountryOld::all();
         DB::statement("SET FOREIGN_KEY_CHECKS=0");
	     DB::table('countries')->truncate();
	     DB::statement("SET FOREIGN_KEY_CHECKS=1");
	     Eloquent::unguard();
        foreach ($countriesData as $countrySingle) {
	        Country::create([
	                'id'   => $countrySingle->id_cou,
	                'code' => $countrySingle->code_cou,
	                'name' => $countrySingle->name_cou,
	                'is_eu'=> $countrySingle->eu_cou
	        ]);
    	}

    }
}
