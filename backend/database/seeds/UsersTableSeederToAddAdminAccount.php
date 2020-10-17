<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeederToAddAdminAccount extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'me-admin',
            'email' => 'dotakoyaki@gmail.com',
            'role' => 1,
            'password' => 'et-tu-brute?',
        ]);
    }
}
