<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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

    // protected $model = Product::class;

    public function definition(): array
    {
        return [
            'subCategoryId' => 1,
            'name' => fake()->name(),
            'price' => 1000,
            'description' => fake()->streetAddress(),
            'img1' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMKJPJpPFfTdStIycSuLZ1UeFOH3H__AiaTTiMdqjvcg&s',
            'img2' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMKJPJpPFfTdStIycSuLZ1UeFOH3H__AiaTTiMdqjvcg&s',
            'img3' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMKJPJpPFfTdStIycSuLZ1UeFOH3H__AiaTTiMdqjvcg&s',

        ];
    }
}
