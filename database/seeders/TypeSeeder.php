<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'ELECTRICIDAD'
        ]);

        Type::create([
            'name' => 'ELECTROMECANICO'
        ]);

        Type::create([
            'name' => 'CONSTRUCCION'
        ]);

        Type::create([
            'name' => 'MANTENIMIENTO'
        ]);

        Type::create([
            'name' => 'ADMINISTRATIVO'
        ]);
    }
}
