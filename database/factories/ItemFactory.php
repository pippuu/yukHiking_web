<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ItemFactory extends Factory
{
    protected $model = Item::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ID_Agent' => $this->faker->unique()->buildingNumber,
            'Nama'  => $this->faker->randomElement($array = array('Tenda', 'Jaket', 'Sepatu', 'Selimut', 'Kompor', 'Syal', 'Backpack', 'Termos', 'Plastik', 'Jas Hujan')),
            'Stock'  => $this->faker->buildingNumber,
            'Harga' => $this->faker->numberBetween($min = 5000, $max = 50000)
        ];
    }
}
