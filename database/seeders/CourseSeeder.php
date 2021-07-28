<?php

namespace Database\Seeders;

use App\Models\Course;
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
        Course::create([
            'Name' => 'Computer Science',
            'abbreviation' => 'CS',
            'department_id' => 1,
        ]);

        Course::create([
            'Name' => 'Information Technology',
            'abbreviation' => 'IT',
            'department_id' => 1,
        ]);
    }
}
