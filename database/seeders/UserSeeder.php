<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'          => 'Super Admin',
            'email'         => 'superadmin@gmail.com',
            'username'      => 'superadmin',
            'role'          => 'SuperAdmin',
            'password'      => Hash::make('password'),
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'name'          => 'Administrator',
            'email'         => 'admin@gmail.com',
            'username'      => 'admin',
            'role'          => 'Admin',
            'password'      => Hash::make('password'),
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'name'          => 'User',
            'email'         => 'user@gmail.com',
            'username'      => 'user',
            'role'          => 'User',
            'password'      => Hash::make('password'),
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'name'          => 'Nijiko',
            'email'         => 'nijiko@gmail.com',
            'username'      => 'nijiko',
            'role'          => 'User',
            'password'      => Hash::make('password'),
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'name'          => 'Safira',
            'email'         => 'safira@gmail.com',
            'username'      => 'safira',
            'role'          => 'User',
            'password'      => Hash::make('password'),
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'name'          => 'Naufal',
            'email'         => 'naufal@gmail.com',
            'username'      => 'naufal',
            'role'          => 'User',
            'password'      => Hash::make('password'),
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString(),
        ]);
    }
}
