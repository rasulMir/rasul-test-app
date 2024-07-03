<?php

namespace Database\Factories;

use App\Enum\ShareTypeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Share>
 */
class ShareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'description' => fake()->text(),
            'discount' => rand(1, 99),
            'share_type' => fake()->boolean() ? ShareTypeEnum::DISCOUNT->value : ShareTypeEnum::PROMOTION->value,
        ];
    }
}
