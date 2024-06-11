<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Categories')->insert([
            ['name' => 'Sleeping', 'user_id' => 1],
            ['name' => 'Finances', 'user_id' => 1],
            ['name' => 'Fitness', 'user_id' => 1],
            ['name' => 'Miscellaneous', 'user_id' => 1],
            ['name' => 'Travel', 'user_id' => 1],
        ]);
    }
}

