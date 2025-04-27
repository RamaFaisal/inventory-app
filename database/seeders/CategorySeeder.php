<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Alat Tulis',
            'created_by' => 1,
        ]);

        Category::create([
            'name' => 'Peralatan Kantor',
            'created_by' => 2,
        ]);
    }
}
