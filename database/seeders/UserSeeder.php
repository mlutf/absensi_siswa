<?php

namespace Database\Seeders;
use App\Models\User;

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
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admi@upiw.id',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');
        
        $admin2 = User::create([
            'name' => 'admin',
            'email' => 'lufi@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin2->assignRole('admin');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@upiw.id',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('user');
    }
}
