<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'customer_id' => Customer::factory(),
            'total_price' => 0, // คำนวณจาก OrderDetail
            'status' => $this->faker->randomElement(['pending', 'completed', 'canceled']),
        ];
    }
}

