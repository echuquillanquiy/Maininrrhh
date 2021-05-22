<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(AmountSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(DepartamentSeeder::class);
    }
}
