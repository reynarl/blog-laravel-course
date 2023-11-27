<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Reyna',
            'email' => 'reyna@gmail.com',
            'password' => bcrypt('HolaMundo')
        ]);

        User::factory(20)->create();
    }
}
