<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\NewsLang;
use App\Models\VictimsLang;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsLang>
 */
class VictimsLangFactory extends Factory
{
    use WithFaker;

    protected $model = VictimsLang::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'biography' => $this->faker->realText,
            'victimId' => 1,
            'lang' => 'ar'
        ];
    }
}
