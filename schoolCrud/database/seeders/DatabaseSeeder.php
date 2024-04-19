<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use App\Models\Course;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Sadip',
            'email' => 'fazhrul.sadip10@gmail.com',
            'password' => 'password'
        ]);
        
        Course::factory()->create([
            'courseName' => 'PHP',
            'courseId' => 'HTTP5226'
        ]);
        Course::factory()->create([
            'courseName' => 'React',
            'courseId' => 'HTTP5223'
        ]);
        Course::factory()->create([
            'courseName' => 'C#',
            'courseId' => 'HTTP5222'
        ]);
        
        Student ::factory(20)->create();
    }
}
