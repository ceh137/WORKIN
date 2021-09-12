<?php

namespace Database\Factories;

use App\Models\Cv;
use App\Models\Seeker;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeekerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Seeker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'cv_id' => Cv::factory(),
            'current_salary' => $this->faker->numberBetween(0, 100000),
            'wanted_salary' => $this->faker->numberBetween(0, 100000),
            'currency' => $this->faker->currencyCode(),
        ];
    }
}
