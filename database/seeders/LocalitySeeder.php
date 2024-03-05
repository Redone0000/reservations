<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Locality;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Supprimez toutes les données existantes dans la table
        Locality::truncate();

        // Définissez les données que vous souhaitez insérer dans la table
        $localities = [
            ['locality' => 'Bruxelles-Ville'],
            ['locality' => 'Schaerbeek'],
            ['locality' => 'Ixelles'],
            ['locality' => 'Saint-Gilles'],
            ['locality' => 'Anderlecht'],
        ];

        //Insert data in the table
        DB::table('localities')->insert($localities);

    }
}
