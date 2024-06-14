<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Diego',
            'email' => 'diego@mail.com',
            'password' => bcrypt('qwerty123'),
        ]);

        $admin->assignRole('admin');


        $admin = User::create([
            'name' => 'cliente',
            'email' => 'cliente@mail.com',
            'password' => bcrypt('abcd123'),
        ]);

        $admin->assignRole('user');
    }
}
