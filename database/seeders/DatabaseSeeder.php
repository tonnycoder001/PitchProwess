<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
use App\Models\Fixture;
use App\Models\Player;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        /**
         * var App\model\User $adminUser
         */
        $adminUser = User::factory()->create([
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'password' => bcrypt('password'),
        ]);

        $adminRole = Role::create([
            'name' => 'admin'
        ]);
        $adminUser->assignRole($adminRole);

        Fixture::factory()->count(15)->create();
        News::factory()->count(15)->create();
        Player::factory()->count(15)->create();
    }
}
