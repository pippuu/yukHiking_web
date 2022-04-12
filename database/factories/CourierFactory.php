<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Courier;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class CourierFactory extends Factory
{
    protected $model = Courier::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */



    public function definition()
    {
        return [
            'username' => $this->faker->name,
            'password' => Hash::make($this->faker->username),
            'status' => $this->faker->randomElement($array = array('Ready', 'Nonaktif', 'Transit'))
        ];
    }
}
