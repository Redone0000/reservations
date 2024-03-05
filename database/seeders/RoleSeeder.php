<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::truncate();

        $roles = [
            ['role' => 'Artiste'],
            ['role' => 'Administrateur'],
            ['role' => 'Spectateur'],
            ['role' => 'Organisateur'],
        ];

        DB::table('roles')->insert($roles);
    }
}