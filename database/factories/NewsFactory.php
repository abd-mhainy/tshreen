<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\City;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    use WithFaker;

    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'coverImage' => $this->faker->imageUrl(640,480),
            'catId' => 1,
            'cityId' => 1,
            'userId' => 1,
        ];
    }
}
