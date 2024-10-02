<?php

namespace Database\Factories;

use App\Models\BillFile; // Ensure this points to the correct model
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BillFile>
 */
class BillFileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BillFile::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'billid' => $this->faker->regexify('[A-Za-z0-9]{10}'), // Random alphanumeric string
            'year' => $this->faker->year, // Random year
            'session' => $this->faker->word, // Random single word     
            'billname' => $this->faker->sentence, // Random sentence
            'sponsor' => $this->faker->name, // Random name
            'status' => $this->faker->randomElement(['In Process', 'Completed', 'Pending']), // Random status
            'created_at' => now(), // Current timestamp
            'updated_at' => now(), // Current timestamp
        ];
    }
}
