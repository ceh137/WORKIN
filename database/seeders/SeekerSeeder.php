<?php

namespace Database\Seeders;

use App\Models\Seeker;
use Illuminate\Database\Seeder;

class SeekerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seeker::factory()->count(1000)->create();
    }
}
