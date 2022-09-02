<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@test.test',
                'password' => Hash::make('test1234'),
                'created_at' => '2022/09/02 11:11:11'
            ],
            [
                'name' => 'test',
                'email' => 'test@test.com',
                'password' => Hash::make('pass1234'),
                'created_at' => '2022/09/02 11:11:11'
            ]
        ]);
    }
}
