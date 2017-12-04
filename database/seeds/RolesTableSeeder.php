<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            'name' => 'Admin',
            'description' => 'Can do all actions',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
