<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'Name' => 'School of Information Technology',
            'dean_id' => 4,
        ]);

        Department::create([
            'Name' => 'School of Multimedia Sciences',
            'dean_id' => 5,
        ]);
    }
}
