<?php

namespace Database\Seeders;

use App\Models\Ubigee;
use Illuminate\Database\Seeder;

class UbigeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ubigee::factory(200)->create();
    }
}
