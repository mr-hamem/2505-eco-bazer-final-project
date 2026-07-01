<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $users = [
            [
                'name' => 'shourab',
                'email' => 'shourab.cit.bd@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ataur',
                'email' => 'ataur@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Foyjur',
                'email' => 'foyjurrafee99@gmail.com',
                'password' => Hash::make('password'),
            ]
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
