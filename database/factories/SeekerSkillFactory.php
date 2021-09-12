<?php

namespace Database\Factories;

use App\Models\Seeker;
use App\Models\SeekerSkill;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeekerSkillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SeekerSkill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'seeker_id' => Seeker::all()->random()->id,
            'skill_id' => Skill::factory(),
        ];
    }
}
