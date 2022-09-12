<?php

namespace Database\Seeders;

use DB;
use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
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
    // Populate classrooms table
    DB::table('classrooms')->insert([
        [
            'name' => 'C1'
        ], 
        [
            'name' => 'C2'
        ], 
        [
            'name' => 'C3'
        ]
    ]);  
    // Populate courses table
    DB::table('courses')->insert([
        [
            'domain_id' => 3,
            'name' => 'Music theory'
        ], 
        [
            'domain_id' => 1,
            'name' => 'Drama'
        ], 
        [
            'domain_id' => 3,
            'name' => 'Guitar'
        ], 
        [
            'domain_id' => 1,
            'name' => 'Poetry'
            ]
        ]);
        // Populate domains table
        DB::table('domains')->insert([
            [
                'name' => 'Arts de la parole'
            ], 
            [
                'name' => 'Expression corporelle'
            ],
            [
                'name' => 'Musique'
            ], 
            [
                'name' => 'Pluridisciplinaire'
            ]
        ]);   
        // Populate groups table
        DB::table('groups')->insert([
        [
            'classroom_id' => 1,
            'course_id' => 1,
            'level_id' => 1,
            'weekday' => 'Wednesday',
            'start_time' => Carbon::createFromFormat('H:i', '18:10'),
            'end_time' => Carbon::createFromFormat('H:i', '19:00'),
        ],
        [
            'classroom_id' => 2,
            'course_id' => 2,
            'level_id' => 3,
            'weekday' => 'Tuesday',
            'start_time' => Carbon::createFromFormat('H:i', '18:10'),
            'end_time' => Carbon::createFromFormat('H:i', '19:00'),
        ],
        [
            'classroom_id' => 3,
            'course_id' => 3,
            'level_id' => 5,
            'weekday' => 'Wednesday',
            'start_time' => Carbon::createFromFormat('H:i', '17:20'),
            'end_time' => Carbon::createFromFormat('H:i', '18:10'),
        ],
        [
            'classroom_id' => 2,
            'course_id' => 4,
            'level_id' => 7,
            'weekday' => 'Wednesday',
            'start_time' => Carbon::createFromFormat('H:i', '16:30'),
            'end_time' => Carbon::createFromFormat('H:i', '17:20'),
        ]
    ]);
    // Populate levels table
    DB::table('levels')->insert([
        [
            'name' => 'F1'
        ], 
        [
            'name' => 'F2'
        ], 
        [
            'name' => 'F3'
        ],
        [
            'name' => 'F4'
        ], 
        [
            'name' => 'F5'
        ], 
        [
            'name' => 'Q1'
        ], 
        [
            'name' => 'Q2'
        ], 
        [
            'name' => 'Q3'
        ],
        [
            'name' => 'Q4'
        ], 
        [
            'name' => 'Q5'
        ], 
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
    }
}
