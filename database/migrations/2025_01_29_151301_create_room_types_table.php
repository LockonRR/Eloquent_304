<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_room_types_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('room_types', function (Blueprint $table) {
            $table->id(); // room_type_id (Primary Key)
            $table->string('name', 50);
            $table->text('description')->nullable();
            $table->decimal('price_per_night', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('room_types');
    }
};
