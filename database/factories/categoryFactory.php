<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\category>
 */
class categoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
       
            return [
                'title_ar' => $this->faker->word,
                'title_en' => $this->faker->word,
                'slug_ar' => Str::slug($this->faker->word),
                'slug_en' => Str::slug($this->faker->word),
                'parint_id' => NULL, // or provide a valid parent_id if needed
                'description_ar' => $this->faker->paragraph,
                'description_en' => $this->faker->paragraph,
                'image' => 'category-image.jpg',
                'status' => $this->faker->randomElement(['active', 'inactive']),
            ];
      
    }
}
