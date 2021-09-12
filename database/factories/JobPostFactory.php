<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\JobCategory;
use App\Models\JobDescription;
use App\Models\JobExperience;
use App\Models\JobPost;
use App\Models\JobType;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_company_id' => Company::all()->random()->id,
            'is_remote' => $this->faker->boolean(50),
            'job_category_id' => JobCategory::factory(),
            'job_type_id' => JobType::factory(),
            'location_id' => Location::factory(),
            'description_id' => JobDescription::factory(),
            'job_experience_id' => JobExperience::factory(),
        ];
    }
}
