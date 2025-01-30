<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_registers_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id(); // register_id (Primary Key)
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->foreignId('teacher_id')->constrained('teachers')->onDelete('cascade');
            $table->date('registration_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registers');
    }
};

