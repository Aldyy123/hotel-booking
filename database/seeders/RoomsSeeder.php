<?php

namespace Database\Seeders;

use App\Models\Rooms;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Casts\Json;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rooms::create(
            [
                'name' => 'Superior',
                'description' => 'Superior Room',
                'price' => 378000,
                'amount' => 10,
                'images' => Json::encode([asset('images/superior-1.jpeg'), asset('images/superior-2.jpeg'), asset('images/superior-3.jpeg')])
            ],
            [
                'name' => 'Deluxe',
                'description' => 'Deluxe Room',
                'price' => 428000,
                'amount' => 10,
                'images' => Json::encode([asset('images/deluxe-1.jpeg'), asset('images/deluxe-2.jpeg'), asset('images/deluxe-3.jpeg')])
            ],
            [
                'name' => 'Executive',
                'description' => 'Executive Room',
                'price' => 528000,
                'amount' => 10,
                'images' => Json::encode([asset('images/executive-1.jpeg'), asset('images/executive-2.jpeg'), asset('images/executive-3.jpeg')])
            ],
            [
                'name' => 'Family',
                'description' => 'Family Room',
                'price' => 628000,
                'amount' => 10,
                'images' => Json::encode([asset('images/family-1.jpeg'), asset('images/family-2.jpeg'), asset('images/family-3.jpeg')])
            ],
            [
                'name' => 'Extra Bed',
                'description' => 'Extra Bed Room',
                'price' => 150000,
                'amount' => 10,
                'images' => Json::encode([asset('images/extra-bed-1.jpeg'), asset('images/extra-bed-2.jpeg'), asset('images/extra-bed-3.jpeg')])
            ],
        );
    }
}
