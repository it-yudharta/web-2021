<?php

namespace Database\Factories;

use App\Models\Cahya;
use Illuminate\Database\Eloquent\Factories\Factory;

class CahyaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cahya::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nip' => $this->faker->phoneNumber(),
            'nama' => $this->faker->name,
            'ttl' => $this->faker->city() . ', '.  $this->faker->date('d-m-Y'),
            'alamat' => $this->faker->address(),
        ];
    }
}
