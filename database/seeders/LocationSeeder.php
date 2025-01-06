<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parentLocationId = Location::create([
            'name' => 'UNW',
            'parent_id' => null
        ])->id;

        foreach (['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7','B8','B9','B10'] as $class) {
            Location::create([
                'name' => $class,
                'parent_id' => $parentLocationId
            ]);
        }
    }
}
