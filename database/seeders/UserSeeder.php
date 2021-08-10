<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ADMIN',
            'email' => 'admin@mapuasge.com',
            'password' => Hash::make('VivaMapua'),
            'role' => 0,
        ]);

        User::create([
            'name' => 'ICEP Director',
            'email' => 'icepdirector@mapua.edu.ph',
            'password' => Hash::make('VivaMapua'),
            'role' => 1,
        ]);

        User::create([
            'name' => 'ILRAD Director',
            'email' => 'ilraddirector@mapua.edu.ph',
            'password' => Hash::make('VivaMapua'),
            'role' => 2,
        ]);

        User::create([
            'name' => 'Ariel Kelly Balan',
            'email' => 'akdbalan@mapua.edu.ph',
            'password' => Hash::make('VivaMapua'),
            'role' => 3,
        ]);

        User::create([
            'name' => 'Ben Agapito',
            'email' => 'bagapito@mapua.edu.ph',
            'password' => Hash::make('VivaMapua'),
            'role' => 3,
        ]);

        User::create([
            'name' => 'Test Staff 1',
            'email' => 'staff1@mapua.edu.ph',
            'password' => Hash::make('VivaMapua'),
            'role' => 4,
        ]);

        User::create([
            'name' => 'Test Staff 2',
            'email' => 'staff2@mapua.edu.ph',
            'password' => Hash::make('VivaMapua'),
            'role' => 4,
        ]);

        User::create([
            'name' => 'Chloe Espina',
            'email' => 'chloeverr@gmail.com ',
            'password' => Hash::make('VivaMapua'),
            'role' => 0,
        ]);
    }
}
