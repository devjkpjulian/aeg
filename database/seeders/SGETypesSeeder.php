<?php

namespace Database\Seeders;

use App\Models\SGETypes;
use Illuminate\Database\Seeder;

class SGETypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'International OJT',
            'Student Exchange Program',
            'International Plant Visit',
            'International Summer School/Camp',
            'Dual Degree Program'
        ];

        foreach ($types as $type)
        {
            SGETypes::create([
                'name' => $type,
            ]);
        }
    }
}
