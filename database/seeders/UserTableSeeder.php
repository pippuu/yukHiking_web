<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::factory()
            ->count(20)
            ->create();
        // $faker = \Faker\Factory::Create();

        // for ($i = 0; $i < 50; $i++) {
        //     User::create([
        //         'username' => $faker->username,
        //         'password' => '12345',
        //         'alamat' => $faker->address
        //     ]);
        // }
    }
}
