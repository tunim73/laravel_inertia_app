<?php

namespace Database\Factories;

use Faker\Provider\pt_BR\Person;
use Faker\Provider\pt_BR\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Endereco>
 */
class EnderecoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*
        $this->faker->addProvider(new Person($this->faker));
        $this->faker->addProvider(new PhoneNumber($this->faker));
        */
        $optionsComplements = array(
            "15B",
            "apt 10",
            "Fundos",
            null,
            "14L",
        );
        $index = array_rand($optionsComplements, 1);
        $complement = $optionsComplements[$index];

        return [
            'street' => $this->faker->streetName,
            'number' => $this->faker->buildingNumber,
            'complement' => $complement,
            'locality' => $this->faker->city
        ];
    }
}
