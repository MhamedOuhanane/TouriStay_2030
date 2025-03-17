<?php

namespace Database\Factories;

use App\Models\Proprietaire;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Cities for the World Cup 2030 host countries
        $cities = [
            "Buenos Aires", "Mendoza", "Cordoba", // Argentina
            "Montevideo", // Uruguay
            "Madrid", "Barcelona", "Seville" // Spain
        ];

        // Countries for World Cup 2030
        $countries = [
            "Argentina", "Uruguay", "Spain"
        ];

        // Random city and country for each ad
        $location = $this->faker->randomElement($cities);
        $country = $this->faker->randomElement($countries);

        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'location' => $location,
            'Country' => $country,
            'prix' => $this->faker->numberBetween(200, 400),
            'photo' => "annonceDefoult.png",
            'start_date' => $this->faker->dateTimeBetween('2030-01-01', '2030-12-31')->format('Y-m-d'),
            'end_date' => $this->faker->dateTimeBetween('2030-01-01', '2030-12-31')->format('Y-m-d'),
            'proprietaire_id' => $this->faker->randomElement(Proprietaire::pluck('id')->toArray()),
        ];
    }
}
