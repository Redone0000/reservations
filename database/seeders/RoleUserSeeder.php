<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('role_user')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
        //Define data
        $roleUser = [
            [
                'role_id'=> 1,
                'user_id'=>1,
            ],
            [
                'role_id'=> 2,
                'user_id'=> 2,
            ],
        ];
        DB::table('role_user')->insert($roleUser);
    }
}
