<?php

namespace Database\Seeders;

use App\Models\Collaborator;
use App\Models\Position;
use App\Models\Ubigee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('colaboradores');
        Storage::makeDirectory('colaboradores');

        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(AmountSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(DepartamentSeeder::class);
        $this->call(UbigeeSeeder::class);
        $this->call(CollaboratorSeeder::class);
    }
}
