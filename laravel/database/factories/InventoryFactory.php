<?php

namespace Database\Factories;

use App\Models\InvetoryModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InvetoryModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->name,
            'type' => $this->faker->unique()->safeEmail,
            'name' => '', // password
        ];
    }
}
