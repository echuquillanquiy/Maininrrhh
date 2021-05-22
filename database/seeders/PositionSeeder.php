<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create([
            'name' => 'MECANICO',
        ]);

        Position::create([
            'name' => 'ELECTRICISTA',
        ]);

        Position::create([
            'name' => 'INGENIERO',
        ]);

        Position::create([
            'name' => 'ADMINISTRATIVO',
        ]);

        Position::create([
            'name' => 'ELECTROMECANICO',
        ]);
    }
}
