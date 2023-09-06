<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = ['Project1', 'Project2', 'Project3'];

        foreach($projects as $project) {
            \App\Models\Project::create([
                'name' => $project,
            ]);
        }
    }
}
