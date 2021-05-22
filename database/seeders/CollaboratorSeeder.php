<?php

namespace Database\Seeders;

use App\Models\Collaborator;
use App\Models\DatoGeneral;
use App\Models\Departament;
use App\Models\District;
use App\Models\Image;
use App\Models\Medical;
use App\Models\Province;
use App\Models\Training;
use App\Models\Ubigee;
use Illuminate\Database\Seeder;

class CollaboratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collaborators = Collaborator::factory(20)->create();

        foreach ($collaborators as $collaborator){
            Image::factory(1)->create([
                'imageable_id' => $collaborator->id,
                'imageable_type' => 'App\Models\Collaborator'
            ]);

            DatoGeneral::factory(1)->create([
               'collaborator_id' => $collaborator->id,
            ]);

            Training::factory(3)->create([
                'collaborator_id' => $collaborator->id,
            ]);

            Medical::factory(1)->create([
                'collaborator_id' => $collaborator->id,
            ]);
        }
    }
}
