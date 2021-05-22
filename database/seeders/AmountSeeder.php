<?php

namespace Database\Seeders;

use App\Models\Amount;
use Illuminate\Database\Seeder;

class AmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Amount::create([
            'name' => 'MECANICO',
            'monto' => '170'
        ]);

        Amount::create([
            'name' => 'ELECTRICISTA',
            'monto' => '150'
        ]);

        Amount::create([
            'name' => 'INGENIERO',
            'monto' => '190'
        ]);

        Amount::create([
            'name' => 'ADMINISTRATIVO',
            'monto' => '160'
        ]);

        Amount::create([
            'name' => 'ELECTROMECANICO',
            'monto' => '180'
        ]);
    }
}
