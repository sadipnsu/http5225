<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Student; 


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run():void
    {
        // \App\Models\User::factory(10)->create();
        User::factory()->count(2)->create();
        Student::factory()->count(20)->create();

    
    }
}
