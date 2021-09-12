<?php

namespace Database\Seeders;

use App\Models\SeekerExperience;
use Illuminate\Database\Seeder;

class SeekerExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SeekerExperience::factory()->count(2000)->create();
    }
}
