<?php

namespace Database\Factories;

use App\Models\JobDescription;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobDescriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobDescription::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brief'  => $this->faker->text(150),
            'full' => $this->faker->text(1500),
        ];
    }
}
