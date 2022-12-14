<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
           [
                'name' => 'owner',
                'email' => 'owner@test.test',
                'password' => Hash::make('pass1234'),
                'created_at' => '2022/09/02 11:11:11'
           ],
           [
                'name' => 'test1',
                'email' => 'test1@test.com',
                'password' => Hash::make('pass1234'),
                'created_at' => '2022/09/02 11:11:11'
           ],
           [
                'name' => 'test2',
                'email' => 'test2@test.com',
                'password' => Hash::make('pass1234'),
                'created_at' => '2022/09/02 11:11:11'
           ],
           [
                'name' => 'test3',
                'email' => 'test3@test.com',
                'password' => Hash::make('pass1234'),
                'created_at' => '2022/09/02 11:11:11'
           ],
        ]);
    }
}
