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

        DB::insert('insert into users (nom, prenom, email, pseudo, Mot_Passe) values (?, ?, ?, ?, ?)', ['Admin', 's.fasseu@gmail.com', 'admin', 'bonjour', 'dan', Hash::make('admin')]);

        DB::table('users')->insert([
            'nom'  => 'Admin2',
            'email' => 'dorier707@gmail.com',
            'prenom' => 'dorier',
            'pseudo' => 'rengoku',
            'Mot_Passe' => Hash::make('admin'),
        ]);
    }
}
