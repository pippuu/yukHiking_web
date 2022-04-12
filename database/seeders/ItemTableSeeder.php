<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;


class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Item::truncate();

        Item::factory()
            ->count(5)
            ->create();
        // Items::truncate();

        // $faker = \Faker\Factory::Create();

        // for ($i = 0; $i < 50; $i++) {
        //     Items::create([
        //         'ID_Agent' => $faker->unique()->buildingNumber,
        //         'Nama'  => $faker->randomElement($array = array('Tenda', 'Jaket', 'Sepatu', 'Selimut', 'Kompor', 'Syal', 'Backpack', 'Termos', 'Plastik', 'Jas Hujan')),
        //         'Stock'  => $faker->buildingNumber,
        //         'Harga' => $faker->numberBetween($min = 5000, $max = 50000)
        //     ]);
        // }
    }
}
