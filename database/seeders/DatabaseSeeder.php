<?php

namespace Database\Seeders;

use App\Models\CompanyRating;
use App\Models\JobSkill;
use App\Models\Log;
use App\Models\SeekerExperience;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CompanyRatingSeeder::class,
            SeekerExperienceSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
