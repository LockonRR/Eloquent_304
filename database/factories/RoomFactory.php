<?php

// database/factories/RoomFactory.php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Room;

class RoomFactory extends Factory
{
    protected $model = Room::class;

    public function definition()
    {
        return [
            'room_number' => $this->faker->unique()->numberBetween(100, 999),
            'room_type_id' => \App\Models\RoomType::factory(), // สร้าง RoomType ให้ด้วย
            'status' => $this->faker->randomElement(['available', 'booked']),
            'price' => $this->faker->numberBetween(1000, 5000),
        ];
    }
}

