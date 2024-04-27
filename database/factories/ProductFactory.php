<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'category_id' => rand(1, 5),
            'name' => [
                'uz' => fake()->sentence(3),
                'ru' => 'Комплект спалний мебели',

            ],
            'price' => rand(50000, 10000000),
            'description' => [
                'uz' => fake()->paragraph(5),
                'ru' => 'Мебель для дома. Столы и стулья 78 товаров · Тумбы и комоды 53 товара · Ширмы 4 товара',
            ]
        ];
    }
}
