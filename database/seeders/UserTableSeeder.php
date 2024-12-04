<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'gender'=> 'Male',
                'photo' => 'Image will be here',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'status' => '1'
            ],
            [
                'name' => 'HR',
                'gender'=> 'Female',
                'photo' => 'Image will be here',
                'username' => 'hr',
                'email' => 'hr@gmail.com',
                'password' => Hash::make('hr123'),
                'role' => 'hr',
                'status' => '1'
            ],
            [
                'name' => 'Quality',
                'gender'=> 'Male',
                'photo' => 'Image will be here',
                'username' => 'quality',
                'email' => 'quality@gmail.com',
                'password' => Hash::make('quality123'),
                'role' => 'quality',
                'status' => '1'
            ],
            [
                'name' => 'Store',
                'gender'=> 'Male',
                'photo' => 'Image will be here',
                'username' => 'store',
                'email' => 'store@gmail.com',
                'password' => Hash::make('store123'),
                'role' => 'store',
                'status' => '1'
            ],
            [
                'name' => 'Finance',
                'gender'=> 'Male',
                'photo' => 'Image will be here',
                'username' => 'finance',
                'email' => 'finance@gmail.com',
                'password' => Hash::make('finance123'),
                'role' => 'finance',
                'status' => '1'
            ],
            [
                'name' => 'Production',
                'gender'=> 'Male',
                'photo' => 'Image will be here',
                'username' => 'production',
                'email' => 'production@gmail.com',
                'password' => Hash::make('production123'),
                'role' => 'production',
                'status' => '1'
            ],
            [
                'name' => 'User',
                'gender'=> 'Male',
                'photo' => 'Image will be here',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user123'),
                'role' => 'user',
                'status' => '1'
            ]
            ]);
    }
}
