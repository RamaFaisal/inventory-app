<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'username' => 'admin',
            'password' => bcrypt('admin123'),
            'email' => 'admin@gmail.com',
        ]);

        Admin::create([
            'username' => 'adminstore',
            'password' => bcrypt('adminstore123'),
            'email' => 'adminstore@gmail.com',
        ]);
    }
}
