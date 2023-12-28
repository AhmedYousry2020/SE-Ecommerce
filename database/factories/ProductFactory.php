<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_title' => Str::random(10),
            'product_sku'=>Str::random(5).rand(1,1000),
            'product_image'=>Str::random(20).'.jpg',
            'qty'=>$this->faker->numberBetween(10,20),
            'price'=>$this->faker->numberBetween(1500, 6000),
            'discount'=>$this->faker->numberBetween(5, 15),
            'seo_keywords' => Str::random(5),
            'identifier' => Str::random(4),
            'approved'=> $this->faker->numberBetween(0,1),
            'shop_id'=>$this->faker->numberBetween(1,10),
            'category_id'=>$this->faker->numberBetween(1,10)
        ];
    }
}
