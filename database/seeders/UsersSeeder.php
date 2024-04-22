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
        for ($i=0; $i<3; ++$i) {
            User::create([
                'username' => 'Aramayisyan',
                'email' => 'aramayisyan@gmail.com',
                'password' => Hash::make('3344'),
                'phone' => '041112211',
                'about' => 'lorem text',
            ]);
        }
    }
}
