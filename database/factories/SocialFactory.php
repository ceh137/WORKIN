<?php

namespace Database\Factories;

use App\Models\Social;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Social::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vkontakte' => $this->faker->url(),
            'instagram' => $this->faker->url(),
            'github' => $this->faker->url(),
            'twitter' => $this->faker->url(),
            'google' => $this->faker->url(),
        ];
    }
}
