<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_courses_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // course_id (Primary Key)
            $table->string('course_name', 100);
            $table->string('course_code', 10)->unique();
            $table->integer('credit');
            $table->enum('semester', ['1st', '2nd', 'Summer']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
