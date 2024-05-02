<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PropertyType;


class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Apartment', 'House', 'Commercial', 'Garage', 'Lot'];
        foreach ($types as $value) {
            PropertyType::create([
               'name' => $value
            ]);
        }
    }
}
