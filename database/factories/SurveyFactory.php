<?php

namespace Database\Factories;

use App\Models\Survey;
use Illuminate\Database\Eloquent\Factories\Factory;

class SurveyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Survey::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'food_id' => $this->faker->numberBetween(1,3),
            'pet_id' => $this->faker->numberBetween(1,3),
            'user' => $this->faker->unique()->safeEmail(),
        ];
    }
}
