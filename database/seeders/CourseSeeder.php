<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Course::factory()->create([
            'name'=> 'PL1',
            'c_code'=> 'CSC101',
            't_id'=> 'Teacher 1',
        ]);
    }
}
