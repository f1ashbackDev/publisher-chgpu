<?php

namespace Database\Seeders;

use App\Models\Depart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Depart::factory()->create([
            'name' => 'Нет',
            'total_count' => 0,
        ]);
    }
}
