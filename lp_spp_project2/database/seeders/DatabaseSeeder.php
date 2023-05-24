<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin'
        ]);

        Role::create([
            'name' => 'petugas'
        ]);

        User::create([
            'username' => 'yosep123',
            'name' => 'Yosep Wahid',
            'role_id' => '1',
            'password' => bcrypt('1234'),
            'email' => 'admin@gmail.com'
        ]);

        User::create([
            'username' => 'sarif123',
            'name' => 'Sarifudin',
            'role_id' => '1',
            'password' => bcrypt('1234'),
            'email' => 'petugas@gmail.com'
        ]);
    }
}
