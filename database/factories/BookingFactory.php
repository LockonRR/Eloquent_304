<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Booking;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        return [
            'customer_id' => \App\Models\RoomCustomer::factory(), // เชื่อมโยงกับ RoomCustomer
            'room_id' => \App\Models\Room::factory(),
            'check_in_date' => $this->faker->date(),
            'check_out_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['confirmed', 'pending', 'cancelled']),
        ];
    }
}
