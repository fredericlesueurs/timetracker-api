<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory()
            ->count(20)
            ->has(
                Project::factory()
                    ->count(1)
                    ->has(
                        Project::factory()->count(2),
                        'children'
                    )
            )
            ->create();
    }
}
