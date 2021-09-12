<?php

namespace Database\Factories;

use App\Models\JobPost;
use App\Models\JobSkill;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobSkillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobSkill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => JobPost::all()->random()->id,
            'skill_id' => Skill::factory(),
            'level' => $this->faker->numberBetween(1,100),
        ];
    }
}
