<?php

namespace Database\Factories;

use App\Models\CompanyDescription;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyDescriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CompanyDescription::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brief' =>  $this->faker->text(150),
            'full' => $this->faker->realText(500),
        ];
    }
}
