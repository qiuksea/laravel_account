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
        for ($i=0; $i < 8; $i++) { 
	    	DB::table('accounts')->insert([
	            'name' => str_random(8),
	            'tel' => str_random(8),
	            'email' => str_random(5).'@mail.com',
	            'notes' => 'test',
                'created_at' => date("Y-m-d H:i:s")
	        ]);
    	}
    }
}
