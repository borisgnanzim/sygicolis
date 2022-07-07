<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nom_client' => $this->faker->name(),
            'mail_client' => $this->faker->unique()->safeEmail(),
            'addresse_client' => $this->faker->title(),
            'tel_client' => $this->faker->phoneNumber(),
        ];
    }
}
