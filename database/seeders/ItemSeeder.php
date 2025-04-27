<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'name' => 'Item A',
            'description' => 'Item A description',
            'price' => 10000,
            'quantity' => 10,
            'category_id' => 2,
            'supplier_id' => 2,
            'created_by' => 1,
        ]);

        Item::create([
            'name' => 'Item B',
            'description' => 'Item B description',
            'price' => 20000,
            'quantity' => 12,
            'category_id' => 2,
            'supplier_id' => 1,
            'created_by' => 2,
        ]);
    }
}
