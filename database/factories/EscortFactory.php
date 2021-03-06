<?php

namespace Database\Factories;

use App\Models\Escort;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EscortFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Escort::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name =  $this->faker->sentence();
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'description' => $this->faker->paragraph(),
            'category' => $this->faker->randomElement(['Madrid', 'Barcelona'])
        ];
    }
}
