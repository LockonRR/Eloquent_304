<?php

// database/factories/RoomTypeFactory.php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RoomType;

class RoomTypeFactory extends Factory
{
    protected $model = RoomType::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word, // เปลี่ยนจาก 'type_name' เป็น 'name'
            'description' => $this->faker->sentence,
            'price_per_night' => $this->faker->randomFloat(2, 500, 5000), // กำหนดช่วงราคาต่อคืน
        ];
    }
}
