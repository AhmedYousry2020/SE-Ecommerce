<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_name' => Str::random(10),
            'category_description' => $this->faker->text(),
            'category_slug' => Str::random(10),
            'category_image'=> Str::random(20).'.jpg',
            'parent_id'=>$this->faker->numberBetween(1,4)
        ];
    }
}
