<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // เรียกใช้ Seeder ทั้งหมดที่ต้องการรัน
        $this->call([
            RoomSeeder::class,      // รัน RoomSeeder
            RoomSeeder::class,   // รัน BookingSeeder
            ProductSeeder::class,   // รัน ProductSeeder
        ]);
    }
}
