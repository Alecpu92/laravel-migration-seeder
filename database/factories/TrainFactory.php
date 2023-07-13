<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
        ];
    }
}

$table ->string('agency');
$table ->string('departure_station', 36);
$table ->string('arrival_station', 36);
$table ->integer('departure_time');
$table ->integer('arrival_time');
$table ->string('train_code');
$table ->integer('number_carriages');
$table ->boolean('in_time');
$table ->boolean('deleted');
