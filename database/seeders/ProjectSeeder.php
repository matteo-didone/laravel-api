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
        $projects = [
            [
                'name' => 'Project1',
                'description' => 'Description for Project1',
                'budget' => 1000,
                'start_date' => '2023-09-06',
                'end_date' => '2023-12-31',
                'is_active' => true,
            ],
            [
                'name' => 'Project2',
                'description' => 'Description for Project2',
                'budget' => 1500,
                'start_date' => '2023-09-10',
                'end_date' => '2023-10-30',
                'is_active' => true,
            ],
            [
                'name' => 'Project3',
                'description' => 'Description for Project3',
                'budget' => 800,
                'start_date' => '2023-09-15',
                'end_date' => '2023-11-20',
                'is_active' => false,
            ],
        ];

        foreach ($projects as $projectData) {
            \App\Models\Project::create($projectData);
        }
    }
}
