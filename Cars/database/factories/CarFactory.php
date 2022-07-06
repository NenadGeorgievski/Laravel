<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
            $image = $this->faker->image();
            $imageFile = new File($image);

            return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'slug' => $this->faker->slug(),
            'model' => $this->faker->sentence(),
            'excerpt' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween($min = 1, $max = 1000000),
            'thumbnail' => Storage::disk('public')->putFile('thumbnails', $imageFile)
        ];
        
    }
}
