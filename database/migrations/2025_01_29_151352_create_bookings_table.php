<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_bookings_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // booking_id (Primary Key)
            $table->unsignedBigInteger('customer_id');  // เพิ่ม customer_id
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade'); // เชื่อมโยงกับตาราง customers
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->enum('status', ['pending', 'confirmed', 'cancelled', 'booked', 'completed'])->default('pending'); // เพิ่มค่า 'booked' และ 'completed' ใน enum
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
