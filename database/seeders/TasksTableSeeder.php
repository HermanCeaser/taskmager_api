<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use database\factories\TaskFactory;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::factory()->times(50)->create();
    }
}
