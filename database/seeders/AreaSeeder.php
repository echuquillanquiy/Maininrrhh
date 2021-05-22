<?php

namespace Database\Seeders;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'name' => 'MOLIENDA',
        ]);

        Area::create([
            'name' => 'FLOTACION',
        ]);

        Area::create([
            'name' => 'CHANCADO',
        ]);

        Area::create([
            'name' => 'PLANTA CONCENTRADORA',
        ]);

        Area::create([
            'name' => 'ADMINISTRACION',
        ]);
    }
}
