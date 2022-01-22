<?php

namespace Database\Seeders;

use App\Models\RoomContent;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = [
            'Bathroom',
            'TV',
            'Air Conditioner',
            'Refrigerator',
            'Washing Machine',
            'Kitchen',
            'Microwave',
            'Oven',
            'Dishwasher',
            'Toaster',
            'Coffee Machine',
            'Hair Dryer',
            'Iron',
            'Sofa',
        ];

        foreach ($content as $item) {
            RoomContent::create([
                'name' => $item,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}