<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "uuid"=>$this->faker->uuid,
            "designation" =>$this->faker->realText($maxNbChars = 200, $indexSize = 2),
            "prix" =>$this->faker->numberBetween($min = 500, $max = 9000),
            "like" =>$this->faker->numberBetween($min = 1000, $max = 9000),
            "pays_source" =>$this->faker->country,
            "poids" =>$this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),

        ];
    }
}
