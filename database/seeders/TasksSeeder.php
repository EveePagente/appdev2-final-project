<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Tasks')->insert([
            ['title' => 'Business Proposal', 'description' => 'Required proofreading.', 'due_date' => '2024-06-03', 'status' => 'completed', 'prioritization' => 'low', 'user_id' => 1, 'category_id' => 6, 'duration' => '1 day'],
            ['title' => 'Assessment', 'description' => 'Submit all on time.', 'due_date' => '2024-06-01', 'status' => 'completed', 'prioritization' => 'medium', 'user_id' => 1, 'category_id' => 7, 'duration' => '1 week'],
            ['title' => 'Quiz', 'description' => 'The quiz will be held this saturday', 'due_date' => '2024-06-08', 'status' => 'in-progress', 'prioritization' => 'high', 'user_id' => 1, 'category_id' => 8, 'duration' => '3 days'],
            ['title' => 'Budget planning', 'description' => 'Plan budget for vacation.', 'due_date' => '2024-06-20', 'status' => 'pending', 'prioritization' => 'low', 'user_id' => 1, 'category_id' => 10, 'duration' => '1 month'],
            ['title' => 'Plan vacation', 'description' => 'Organize the itinerary for the summer vacation.', 'due_date' => '2024-07-01', 'status' => 'pending', 'prioritization' => 'low', 'user_id' => 1, 'category_id' => 10, 'duration' => '1 month'],
        ]);
    }
}