<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\CompanyDescription;
use App\Models\CompanyRating;
use App\Models\Location;
use App\Models\Social;
use App\Models\Stream;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->company(),
            'logo' => $this->faker->imageUrl( 640, 640),
            'contact_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->companyEmail(),
            'socials_id' => Social::factory(),
            'location_id' => Location::factory(),
            'company_description_id' =>  CompanyDescription::factory(),
            'establishment_year' => $this->faker->year(),
            'website' => $this->faker->url(),
            'stream_id' => Stream::factory()
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Company $company) {
            CompanyRating::factory()->make([
                'company_id' => $company->id,
            ]);
        }) ;
    }
}
