<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\CompanyRating;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyRatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CompanyRating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => $this->faker->numberBetween(1, 100),
            'rating' => $this->faker->numberBetween(1, 100),
        ];
    }

}
