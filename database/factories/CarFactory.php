<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $licensePlatePattern = $this->faker->regexify('[A-Z]{2}-[A-Z]{2}-[0-9]{2}');

        $makes = [
            "Toyota",
            "BMW",
            "Hyundai",
            "Tesla",
            "Suzuki",
            "Subaru",
            "Ford",
            "Renault",
            "Kia",
            "Skoda",
            "Bentley",
            "Jaguar",
            "Ferrari",
            "Rolls Royce",
            "Peugeot",
            "Volkswagen",
            "Audi",
            "Nissan",
            "Chevrolet",
            "Buick",
            "Opel",
            "Porsche",
        ];

        $makesName = $this->faker->randomElement($makes);

        $model = $this->faker->regexify('[0-9]{3}-[A-Z]{2}');

        $doors =[
            3,
            5
        ];
        $amountDoors = $this->faker->randomElement($doors);

    

        return [
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
            'license_plate' => $licensePlatePattern,
            'make' => $makesName,
            'model' => $model,            
            'price' => fake()->numberBetween(2000,10000),
            'mileage' => fake()->numberBetween(50000,110000),
            'seats' => fake()->numberBetween(2,5),
            'doors'=> $amountDoors,
            'production_year' => fake()->numberBetween(1980,2022),
            'weight' => fake()->numberBetween(600,3500),
            'color' => fake()->colorName(),
            'image' => fake()->url,
            'sold_at' => fake()->date(),
            'views' => fake()->randomNumber(),
        ];
    }
}
