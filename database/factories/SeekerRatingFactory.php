<?php

namespace Database\Factories;

use App\Models\Seeker;
use App\Models\SeekerRating;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeekerRatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SeekerRating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'seeker_id' => Seeker::all()->random()->id,
            'rating' => $this->faker->numberBetween(0,100),
        ];
    }
}
