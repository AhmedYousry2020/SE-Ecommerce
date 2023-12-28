<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => Str::random(5),
            'shop_name' => Str::random(5),
            'desription' => $this->faker->text(),
            'shop_logo'=> Str::random(20).'.jpg',
            'user_id'=>$this->faker->numberBetween(1,10)
        ];
    }
}
