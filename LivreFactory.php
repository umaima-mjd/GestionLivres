<?php

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CategLivre;

class LivreFactory extends Factory
{
    public function definition()
    {
        return [
            'titre' => $this->faker->sentence(3),
            'auteur' => $this->faker->name(),
            'annee_publication' => $this->faker->year(),
            'resume' => $this->faker->paragraph(),
            'categ_livre_id' => CategLivre::all()->random()->id,
        ];
    }
}
