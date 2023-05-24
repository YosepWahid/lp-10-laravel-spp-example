<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DataSeed extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Role::create([
        //     'name' => 'admin'
        // ]);

        Role::create([
            'name' => 'petugas'
        ]);




        // User::factory()->create([
        //     'role_id' => '1',
        //     'name' => 'Yosep Wahid',
        //     'username' => 'yosep123',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('1234'),
        // ]);
    }
}
