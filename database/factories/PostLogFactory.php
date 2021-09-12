<?php

namespace Database\Factories;

use App\Models\JobPost;
use App\Models\Log;
use App\Models\PostLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostLogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostLog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'job_post_id' => JobPost::all()->random()->id,
            'logs_id' => Log::factory()
        ];
    }
}
