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
        $this->call([
            ArtistSeeder::class,
            UserSeeder::class,
            TypeSeeder::class,
            LocalitySeeder::class,
            RoleSeeder::class,
            LocationSeeder::class,
            ShowSeeder::class,
            RepresentationSeeder::class,
            ArtistTypeSeeder::class,
            ArtistTypeShowSeeder::class,
            RoleUserSeeder::class,
            ReservationSeeder::class,
        ]);
    }
}
