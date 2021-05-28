<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Raul Eduardo',
            'lastname' => 'Chuquillanqui Yupanqui',
            'dni' => '46589634',
            'username' => 'echuquillanquiy',
            'phone' => '944944199',
            'email' => 'echuquillanquiy@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole('Admin');

        User::factory(100)->create();
    }
}
