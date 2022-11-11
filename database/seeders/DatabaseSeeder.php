<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => \Hash::make('12345678'),
            'isAdmin' => true
        ]);

        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => \Hash::make('12345678'),
            'isAdmin' => false
        ]);
        // \App\Models\User::factory(10)->create();
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
