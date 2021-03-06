<?php

namespace Database\Factories;

use App\Models\Disciplina;
use Illuminate\Database\Eloquent\Factories\Factory;

class DisciplinaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Disciplina::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'codigo' => $this->faker->numerify('CDG-#####'),
            'nome' => $this->faker->word,
            'professor' => $this->faker->name,
            'estudantes' => $this->faker->numberBetween(0, 100)

        ];
    }
}
