<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\NewsLang;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsLang>
 */
class NewsLangFactory extends Factory
{
    use WithFaker;

    protected $model = NewsLang::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->realText,
            'newsId' => 1,
            'lang' => 'ar'
        ];
    }
}
