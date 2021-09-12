<?php

namespace Database\Seeders;

use App\Models\SeekerSkill;
use Illuminate\Database\Seeder;

class SeekerSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SeekerSkill::factory()->count(3000)->create();
    }
}
