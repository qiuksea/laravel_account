<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('users')->insert([
            'email' => 'mda05fm@sheffield.ac.uk',
            'role_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
