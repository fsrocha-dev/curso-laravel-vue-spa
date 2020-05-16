<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Frank Rocha',
            'email' => 'contato.frankrocha@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
