<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Todo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titolo' => $this->faker->sentence(),
            'descrizione' => $this->faker->paragraph(),
            'created_at' => $this->faker->date(),
            'prio' => $this->faker->randomElement(['bassa', 'media', 'alta'])
        ];
    }
}
