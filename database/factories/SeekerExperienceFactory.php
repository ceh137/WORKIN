<?php

namespace Database\Factories;

use App\Models\Location;
use App\Models\Seeker;
use App\Models\SeekerExperience;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeekerExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SeekerExperience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween();
        return [
            'seeker_id' => Seeker::all()->random()->id,
            'is_current_job' => $this->faker->boolean(),
            'start_date' => $date,
            'end_date' => $this->faker->dateTimeBetween($date),
            'job_title' => $this->faker->jobTitle(),
            'company_name' => $this->faker->company(),
            'job_location_id' => Location::factory(),
            'description' => $this->faker->text(300),

        ];
    }
}
