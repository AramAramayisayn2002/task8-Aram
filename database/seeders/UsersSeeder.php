<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Aramayisyan1',
            'email' => 'aramayisyan466@gmail.com',
            'password' => Hash::make('3344'),
            'phone' => '041112211',
            'about' => 'lorem text',
        ]);
    }
}
