<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id(); // room_id (Primary Key)
            $table->string('room_number', 20)->unique();
            $table->foreignId('room_type_id')->constrained('room_types')->onDelete('cascade');
            $table->enum('status', ['available', 'occupied', 'maintenance', 'booked'])->default('available'); // เพิ่ม 'booked' ใน enum
            $table->decimal('price', 10, 2);  // เพิ่มคอลัมน์ price
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};

