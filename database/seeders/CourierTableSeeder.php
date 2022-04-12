<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Courier;

class CourierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Courier::truncate();

        Courier::factory()
            ->count(15)
            ->create();

        // $faker = \Faker\Factory::Create();

        // for ($i = 0; $i < 50; $i++) {
        //     Courier::create([
        //         'username' => $faker->name,
        //         'password' => $faker->username,
        //         'status' => $faker->randomElement($array = array('Ready', 'Nonaktif', 'Transit'))
        //     ]);
        // }


    }
}
