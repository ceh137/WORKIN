<?php

namespace Database\Seeders;

use App\Models\SeekerRating;
use Illuminate\Database\Seeder;

class SeekerRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SeekerRating::factory()->count(1000)->create();
    }
}
