<?php

namespace Database\Seeders;

use App\Models\AcademyPlayer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Women;
use App\Models\Senior;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Senior::factory()->count(15)->create();
        Women::factory()->count(15)->create();
        AcademyPlayer::factory()->count(15)->create();
    }
}
