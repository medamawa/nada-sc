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
            'user_name' => 'me-admin',
            'name' => '管理者',
            'email' => 'dotakoyaki@gmail.com',
            'role' => 0,
            'password' => 'et-tu-brute?',
        ]);
    }
}
