<?php

namespace Database\Seeders;

use App\Models\CompanyRating;
use Illuminate\Database\Seeder;

class CompanyRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *sdc
     * @return void
     */
    public function run()
    {
        CompanyRating::factory()->count(100)->create();
    }
}
