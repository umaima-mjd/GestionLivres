<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategLivre;
use App\Models\Livre;

class LivreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créer 3 catégories de livres
        $categories = CategLivre::factory(3)->create();

        // Créer 1000 livres répartis sur ces catégories
        Livre::factory(1000)->create([
            'categ_livre_id' => $categories->random()->id,
        ]);
    }
}
