<?php

namespace Database\Seeders;

use App\Models\PostLog;
use Illuminate\Database\Seeder;

class PostLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostLog::factory()->count(4000)->create();
    }
}
