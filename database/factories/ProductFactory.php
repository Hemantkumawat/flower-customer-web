<?php

namespace Database\Factories;

use Exception;
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
     * @throws Exception
     */
    public function definition(): array
    {
        $item = [
            'code' => strtoupper('FF-' . Str::random(2) . '-' . random_int(10, 99)),
            'title' => $this->faker->sentence(2),
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(200, 200),
        ];
        $item['slug'] = Str::slug($item['title'] . '-' . $item['code']);
        return $item;
    }
}
