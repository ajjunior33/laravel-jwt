<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "André Junior",
            'email' => "ajjunior33@gmail.com",
            'password' => bcrypt('andreregedit'),
        ]);
        User::create([
            'name' => "Daniel Ferreira",
            'email' => "daniel@gmail.com",
            'password' => bcrypt('andreregedit'),
        ]);
        User::create([
            'name' => "André Souza",
            'email' => "andreso@gmail.com",
            'password' => bcrypt('andreregedit'),
        ]);
    }
}
