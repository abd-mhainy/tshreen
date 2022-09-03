<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\City;
use App\Models\News;
use App\Models\User;
use App\Models\Victims;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class VictimsFactory extends Factory
{
    use WithFaker;

    protected $model = Victims::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'coverImage' => $this->faker->imageUrl(640,480),
            'cityId' => 1
        ];
    }

    /**
     * Indicate that the user is suspended.
     *
     * @return Factory
     */
    public function martyr(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'isMartyr' => 1,
            ];
        });
    }

    /**
     * Indicate that the user is suspended.
     *
     * @return Factory
     */
    public function injured(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'isMartyr' => 0,
            ];
        });
    }
}
