<?php

namespace Influence360\BillFiles\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Influence360\BillFiles\Models\BillFile;

class BillFileFactory extends Factory
{
    protected $model = BillFile::class;

    public function definition()
    {
        return [
            'billid' => $this->faker->unique()->regexify('[A-Z]{2}[0-9]{4}'),
            'billname' => $this->faker->sentence(3),
            'year' => $this->faker->year(),
            'session' => $this->faker->word,
            'status' => $this->faker->randomElement(BillFile::getStatusOptions()),
            'sponsor' => $this->faker->name,
        ];
    }
}