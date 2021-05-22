<?php

namespace Database\Seeders;

use App\Models\Departament;
use App\Models\District;
use App\Models\Province;
use Illuminate\Database\Seeder;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departament::factory(10)->create()->each(function (Departament $departament){
           Province::factory(10)->create([
              'departament_id' => $departament->id,
           ])->each(function (Province $province){
               District::factory(10)->create([
                  'province_id' => $province->id,
               ]);
           });
        });
    }
}
