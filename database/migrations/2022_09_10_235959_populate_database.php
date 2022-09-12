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
        /*
        // Populate users table
        DB::table('users')->insert([
            // Students
            [
                'name' => 'Test User', 
                'email' => 'testUser@test.com', 
                'password'=>Hash::make('testtest')
            ], 
            [
                'name' => 'New User', 
                'email' => 'newUser@test.com', 
                'password'=>Hash::make('testtest')
            ], 
            [
                'name' => 'Other User', 
                'email' => 'otherUser@test.com', 
                'password'=>Hash::make('testtest')
            ], 
            // Teachers
            [
                'name' => 'Jimmy String', 
                'email' => 'jString@test.com', 
                'password'=>Hash::make('testtest')
            ],
            [
                'name' => 'Willy Skull', 
                'email' => 'wSkull@test.com', 
                'password'=>Hash::make('testtest')
            ],
            [
                'name' => 'Alicia Key', 
                'email' => 'aKey@test.com', 
                'password'=>Hash::make('testtest')
            ] 
        ]);
        // Create profiles for users
        DB::table('profiles')->insert([
            ['user_id' => 1],
            ['user_id' => 2],
            ['user_id' => 3],
            ['user_id' => 4],
            ['user_id' => 5],
            ['user_id' => 6]
        ]);

        // Populate courses table
        DB::table('courses')->insert([
            [
                'name' => 'Music theory', 
                'domain' => 'Musique'
            ], 
            [
                'name' => 'Drama', 
                'domain' => 'Arts de la parole'
            ], 
            [
                'name' => 'Guitar', 
                'domain' => 'Musique'
            ], 
            [
                'name' => 'Poetry', 
                'domain' => 'Arts de la parole'
            ]
        ]);
        // Populate groups table
        DB::table('groups')->insert([
            [
                'course_id' => 1,
                'teacher_name' => 'Mrs Key',
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
                'course_id' => 4,
                'teacher_name' => 'Mr Skull',
                'classroom' => 'C12',
                'weekday' => 'Wednesday',
                'start_time' => Carbon::createFromFormat('H:i', '16:30'),
                'end_time' => Carbon::createFromFormat('H:i', '17:20'),
            ]
        ]);
        // Populate roles table
        DB::table('roles')->insert([
            [
                'name' => 'Admin'
            ], 
            [
                'name' => 'Teacher'
            ], 
            [
                'name' => 'Student'
            ]
        ]);    
        // Populate group_profile_role pivot table
        DB::table('groups_profiles_roles')->insert([
            // Students
            [
                'group_id' => 1,
                'profile_id' => 1,
                'role_id' => 3
            ],
            [
                'group_id' => 2,
                'profile_id' => 1,
                'role_id' => 3
            ],
            [
                'group_id' => 3,
                'profile_id' => 2,
                'role_id' => 3
            ],
            [
                'group_id' => 4,
                'profile_id' => 2,
                'role_id' => 3
            ],
            [
                'group_id' => 1,
                'profile_id' => 3,
                'role_id' => 3
            ],
            [
                'group_id' => 2,
                'profile_id' => 3,
                'role_id' => 3
            ],
            [
                'group_id' => 3,
                'profile_id' => 3,
                'role_id' => 3
            ],
            [
                'group_id' => 4,
                'profile_id' => 3,
                'role_id' => 3
            ],
            // Teachers
            [
                'group_id' => 1,
                'profile_id' => 6,
                'role_id' => 2
            ],
            [
                'group_id' => 2,
                'profile_id' => 5,
                'role_id' => 2
            ],
            [
                'group_id' => 3,
                'profile_id' => 4,
                'role_id' => 2
            ],
            [
                'group_id' => 4,
                'profile_id' => 5,
                'role_id' => 2
            ]
        ]);
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        // Truncate all tables
        DB::table('groups_profiles_roles')->truncate();
        DB::table('profiles')->truncate();
        DB::table('users')->truncate();
        DB::table('groups')->truncate();
        DB::table('courses')->truncate();
        */
    }
}
