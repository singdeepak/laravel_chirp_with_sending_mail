<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            array(
                'name' => 'Abhishek Kumar',
                'email'=> 'abhishek01@fyntune.com',
                'password'=> Hash::make('abhishek'),
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'Deepak Kumar',
                'email'=> 'deepak01@fyntune.com',
                'password'=> Hash::make('deepak'),
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'Aryan Kumar',
                'email'=> 'aryan01@fyntune.com',
                'password'=> Hash::make('aryan'),
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'Pratham Kumar',
                'email'=> 'pratham01@fyntune.com',
                'password'=> Hash::make('pratham'),
                'created_at' => now(),
                'updated_at' => now()
            ),
        ]);
    }
}
