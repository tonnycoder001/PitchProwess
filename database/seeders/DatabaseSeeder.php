<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Women;
use App\Models\Senior;
use App\Models\AcademyPlayer;
use App\Models\Fixture;
use App\Models\Tournament;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {



        News::factory()->count(15)->create();
        Fixture::factory()->count(15)->create();
    }
}
