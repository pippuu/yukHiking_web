<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Agent;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    protected $model = Agent::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username' => $this->faker->username,
            'password' => Hash::make($this->faker->username),
            'alamat' => $this->faker->address,
            'status' => $this->faker->randomElement($array = array('Aktif', 'Nonaktif', 'Pending')),
            'ID_card' => $this->faker->randomElement($array = array('ID1.jpg', 'ID2.jpeg', 'ID3.jpg'))
        ];
    }
}
