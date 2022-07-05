<?php

namespace Database\Factories;

use App\Models\raw_materials;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class raw_materialsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = raw_materials::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'invoice_file_location' => 'yarn',
            'place_of_purchase' => '100',
            'invoice_cost' => "Boots",
            'vat_cost' => 1, // password
            'created_at' => Carbon::now()
        ];
    }
}
