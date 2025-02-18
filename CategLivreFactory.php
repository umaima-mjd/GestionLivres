<?php

use Illuminate\Database\Eloquent\Factories\Factory;

class CategLivreFactory extends Factory
{
    public function definition()
    {
        return [
            'nom' => $this->faker->word(),
        ];
    }
}
