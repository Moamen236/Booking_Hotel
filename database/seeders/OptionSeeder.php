<?php

namespace Database\Seeders;

use App\Models\RoomOptions;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create options for room types
        $options = [
            'Wi-Fi',
            'Air Conditioner',
            'Television',
            'Bathtub',
            'Mini Bar',
            'Breakfast',
            'Lunch',
            'Dinner',
            'Parking',
            'Swimming Pool',
            'Gym',
            'Spa',
            'Restaurant',
            'Bar',
            'Room Service',
            'Airport Transfer',
            'Laundry Service',
            'Car Rental',
        ];

        foreach ($options as $option) {
            RoomOptions::create([
                'name' => $option,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}