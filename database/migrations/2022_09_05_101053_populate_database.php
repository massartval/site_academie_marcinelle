<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PopulateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Populate users table
        DB::table('users')->insert([
            [
                'name' => 'New User', 
                'email' => 'newUser@test.com', 
                'password'=>Hash::make('testtest')
            ], 
            [
                'name' => 'Other User', 
                'email' => 'otherUser@test.com', 
                'password'=>Hash::make('testtest')
            ] 
        ]);
        // Create profiles for users
        DB::table('profiles')->insert([
            ['user_id' => 1],
            ['user_id' => 2]
        ]);

        // Populate courses table
        DB::table('courses')->insert([
            [
                'name' => 'Formation musicale', 
                'domain' => 'Musique'
            ], 
            [
                'name' => 'Art dramatique', 
                'domain' => 'Arts de la parole'
            ], 
            [
                'name' => 'Guitare', 
                'domain' => 'Musique'
            ], 
            [
                'name' => 'Déclamation', 
                'domain' => 'Arts de la parole'
            ]
        ]);
        // Populate groups table
        DB::table('groups')->insert([
            [
                'course_id' => 1,
                'teacher_name' => 'Mrs Sheet',
                'classroom' => 'C12',
                'weekday' => 'Wednesday',
                'start_time' => Carbon::createFromFormat('H:i', '18:10'),
                'end_time' => Carbon::createFromFormat('H:i', '19:00'),
            ],
            [
                'course_id' => 2,
                'teacher_name' => 'Mr Skull',
                'classroom' => 'C1',
                'weekday' => 'Tuesday',
                'start_time' => Carbon::createFromFormat('H:i', '18:10'),
                'end_time' => Carbon::createFromFormat('H:i', '19:00'),
            ],
            [
                'course_id' => 3,
                'teacher_name' => 'Mr String',
                'classroom' => 'C12',
                'weekday' => 'Wednesday',
                'start_time' => Carbon::createFromFormat('H:i', '17:20'),
                'end_time' => Carbon::createFromFormat('H:i', '18:10'),
            ],
            [
                'course_id' => 2,
                'teacher_name' => 'Mr String',
                'classroom' => 'C12',
                'weekday' => 'Wednesday',
                'start_time' => Carbon::createFromFormat('H:i', '16:30'),
                'end_time' => Carbon::createFromFormat('H:i', '17:20'),
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Truncate all tables
        DB::table('profiles')->truncate();
        DB::table('users')->truncate();
        DB::table('groups')->truncate();
        DB::table('courses')->truncate();
    }
}
