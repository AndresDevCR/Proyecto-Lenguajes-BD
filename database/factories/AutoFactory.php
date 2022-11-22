<?php

namespace Database\Factories;

use App\Models\Auto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Auto::class;

    public function definition()
    {
        return [
            'marca' => fake()->randomElement(['Toyota', 'Nissan', 'Mazda', 'Honda', 'Hyundai', 'Kia', 'Chevrolet', 'Ford', 'Renault', 'Peugeot', 'Citroen', 'Fiat', 'Volkswagen', 'BMW', 'Mercedes Benz', 'Audi', 'Volvo', 'Suzuki', 'Mitsubishi', 'Subaru', 'Daihatsu', 'Lexus', 'Infiniti', 'Jaguar', 'Land Rover', 'Porsche', 'Mini', 'Smart', 'Ferrari', 'Lamborghini', 'Maserati', 'Aston Martin', 'Bentley', 'Rolls Royce', 'Alfa Romeo', 'Chrysler', 'Dodge', 'Jeep', 'Ram', 'Cadillac', 'Buick', 'GMC', 'Lincoln', 'Tesla', 'Acura', 'Isuzu', 'Daewoo', 'Geely', 'Great Wall', 'Haval', 'Haima', 'Changan', 'Chery', 'JAC', 'Lifan', 'BYD', 'FAW', 'Zotye', 'Hafei', 'Dongfeng', 'Foton', 'Xiali', 'Hino', 'Iveco', 'Scania']),
            'modelo' => fake()->randomElement(['A1', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'Q3', 'Q5', 'Q7', 'Q8', 'R8', 'RS3', 'RS4', 'RS5', 'RS6', 'RS7', 'RSQ3', 'S3', 'S4', 'S5', 'S6', 'S7', 'S8', 'SQ5', 'SQ7', 'TT', 'TTS', 'A1', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'Q3', 'Q5', 'Q7', 'Q8', 'R8', 'RS3', 'RS4', 'RS5', 'RS6', 'RS7', 'RSQ3', 'S3', 'S4', 'S5', 'S6', 'S7', 'S8', 'SQ5', 'SQ7', 'TT', 'TTS', 'A1', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'Q3', 'Q5', 'Q7', 'Q8', 'R8', 'RS3', 'RS4', 'RS5', 'RS6', 'RS7', 'RSQ3', 'S3', 'S4', 'S5', 'S6', 'S7', 'S8', 'SQ5', 'SQ7', 'TT', 'TTS', 'A1', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'Q3', 'Q5', 'Q7', 'Q8', 'R8', 'RS3', 'RS4', 'RS5', 'RS6', 'RS7', 'RSQ3', 'S3', 'S4', 'S5', 'S6', 'S7', 'S8', 'SQ5', 'SQ7', 'TT', 'TTS', 'A1', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'Q3', 'Q5', 'Q7', 'Q8', 'R8', 'RS']),
            'color' => fake()->colorName(),
            'placa' => fake()->bothify('???-####'),
            'precio' => fake()->numberBetween(100000, 1000000),
            'tipo' => fake()->randomElement(['Sedan', 'SUV', 'Pickup', 'Hatchback', 'Coupe', 'Convertible', 'Wagon', 'Van', 'Minivan', 'Crossover', 'Hybrid', 'Electric']),
            'estado' => fake()->randomElement(['Nuevo', 'Usado']),
            'imagen' => fake()->imageUrl(640, 480, 'cars', true, 'Faker'),
        ];
    }


}