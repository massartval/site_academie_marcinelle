<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('classroom_id'); // Foreign key to the classrooms table
            $table->unsignedBigInteger('course_id'); // Foreign key to the courses table
            $table->unsignedBigInteger('level_id'); // Foreign key to the levels table
            $table->string('weekday');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
            $table->index('classroom_id');
            $table->index('course_id');
            $table->index('level_id');
            // later add indexes for teacher_id
            // later add name (dynamically generated from course + level)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
