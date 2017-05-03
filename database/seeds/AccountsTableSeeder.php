<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 3; $i++) { 
	    	DB::table('accounts')->insert([
	            'staff_name' => str_random(8),
	            'staff_tel' => str_random(8),
	            'staff_email' => str_random(5).'@mail.com',
                'created_at' => date("Y-m-d H:i:s")
	        ]);
    	}
    }
}
