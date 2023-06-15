<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence( rand( 3, 6 ) );
        return [
            'title'      => $title,
            'slug'          => Str::slug( $title ),
            'excerpt' => $this->faker->paragraphs( rand( 1, 2 ), true ),
            'description'    => $this->faker->paragraphs( rand( 1, 5 ), true ),
            'category_id'   => Category::all()->random()->id,
            'price'        => '130.00',
        ];
    }
}
