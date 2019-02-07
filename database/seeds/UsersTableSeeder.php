<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'kostya',
            'email' => 'konstantin.golomazov@flatium.ru',
            'password' => bcrypt('secret')
        ]);

        User::create([
            'name' => 'elijah',
            'email' => 'elijah@gmail.com',
            'password' => bcrypt('secret')
        ]);
    }
}
