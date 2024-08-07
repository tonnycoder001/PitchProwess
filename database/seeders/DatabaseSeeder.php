<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Women;
use App\Models\Result;
use App\Models\Senior;
use App\Models\Fixture;
use App\Models\Tournament;
use App\Models\AcademyPlayer;
use App\Models\Matches;
use App\Models\Player;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {



        Fixture::factory()->count(15)->create();
        Fixture::factory()->count(15)->create();
        News::factory()->count(15)->create();
        Player::factory()->count(15)->create();
    }
}
