<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agent;
use Illuminate\Support\Facades\Schema;

class AgentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Agent::truncate();

        Agent::factory()
            ->count(15)
            ->create();
        Schema::enableForeignKeyConstraints();
    }
}
