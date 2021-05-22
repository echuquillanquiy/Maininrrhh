<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'T1',
        ]);

        Category::create([
            'name' => 'T2',
        ]);

        Category::create([
            'name' => 'T3',
        ]);

        Category::create([
            'name' => 'T4',
        ]);

        Category::create([
            'name' => 'T5',
        ]);
    }
}
