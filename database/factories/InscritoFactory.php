<?php

namespace Database\Factories;

use Faker\Generator;
use Faker\Provider\pt_BR\Person;
use Faker\Provider\pt_BR\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inscrito>
 */
class InscritoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $this->faker->addProvider(new Person($this->faker));
        $this->faker->addProvider(new PhoneNumber($this->faker));

        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->cellphone(),
            'birthDate' => $this->faker->date,
            'document' => $this->faker->cpf()
        ];

    }
}
