<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create([
            'name' => 'Supplier A',
            'contact_info' => 'supplierA@example.com',
            'created_by' => 1,
        ]);

        Supplier::create([
            'name' => 'Supplier B',
            'contact_info' => 'supplierB@example.com',
            'created_by' => 2,
        ]);
    }
}
