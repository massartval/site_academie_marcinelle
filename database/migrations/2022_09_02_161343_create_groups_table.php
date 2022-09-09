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
            $table->unsignedBigInteger('course_id'); // Foreign key to the courses table
            $table->string('teacher_name'); // later should point to the id of the teacher
            $table->string('classroom'); // later should (maybe?) point to a classroom id
            $table->string('weekday');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
            $table->index('course_id');
            // later add indexes for teacher_id and classroom_id
            // later add name
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
