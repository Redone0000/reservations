<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RepresentationUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('representation_user')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
        //Define data
        $roleUser = [
            [
                'representation_id'=> 1,
                'user_id'=>1,
            ],
            [
                'representation_id'=> 2,
                'user_id'=> 2,
            ],
            [
                'representation_id'=> 2,
                'user_id'=>1,
            ],
            [
                'representation_id'=> 1,
                'user_id'=> 2,
            ],
        ];
        DB::table('representation_user')->insert($roleUser);
    }
}
