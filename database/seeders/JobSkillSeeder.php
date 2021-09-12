<?php

namespace Database\Seeders;

use App\Models\JobSkill;
use Illuminate\Database\Seeder;

class JobSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobSkill::factory()->count(1000)->create();
    }
}
