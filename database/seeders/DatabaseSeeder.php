<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        \App\Models\Equipe::factory(5)->create();


        \App\Models\Client::factory(150)->create();
        \App\Models\User::factory(30)->create();

        \App\Models\Historique::factory(25)->create();

        \App\Models\Hebergement::factory()->create([
            'prixMensuel' => 400,
            'prixTrimestriel' => 1260,
            'prixSemestriel' => 2080,
            'prixAnnuel' => 3500,

        ]);


        \App\Models\User::factory()->create([
            'nom' => 'Afiri',
            'prenom' => 'Mohammed Chouaib',
            'telephone' => '0666277921',
            'role' => 'Admin',
            'status' => 'Confirmé', // Débutant
            'email' => 'chouaib.afiri1@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]);
    }
}
