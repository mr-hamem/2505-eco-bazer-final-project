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
                'name' => 'foyjur',
                'email' => 'foyjurrafee99@gmail.com',
                'password' => Hash::make('password'),
            ]
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['shourab.cit.bd@gmail.com']], // Look up user by email
                [                            // Attributes to set/update
                    'name' => $user['shourab'],
                    'password' => $user['password'],
                ]
            );
        }
    }
}