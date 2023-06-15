<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@vegist.test',
            'password' => bcrypt('123')
        ]);

        Category::factory(20)->create();
        // Slider Seeder
        $this->call(SliderSeeder::class);
        Product::factory(10)->create();


    }
}
