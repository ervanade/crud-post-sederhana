<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Ervan',
            'level' => 'admin',
            'email' => 'ervanade26@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Admin 1',
            'level' => 'admin',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'User 1',
            'level' => 'user',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);
    }
}
