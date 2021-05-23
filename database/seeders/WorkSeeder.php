<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Requirement;
use App\Models\Work;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $works = Work::factory(50)->create();

        foreach ($works as $work){
            Requirement::factory(10)->create([
               'work_id' => $work->id
            ]);
        }
    }
}
