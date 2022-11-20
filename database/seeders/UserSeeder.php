<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create a first user

        DB::insert('insert into users (name, email, prenom, pseudo, password) values (?, ?, ?, ?, ?)', ['Admin', 's.fasseu@gmail.com', 'admin', 'bonjour', 'dan', Hash::make('admin')]);

        DB::table('users')->insert([
            'name'  => 'Admin2',
            'email' => 'dorier707@gmail.com',
            'prenom' => 'dorier',
            'pseudo' => 'rengoku',
            'password' =>Hash::make('admin')
        ]);
    }
}
