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
            'agency' => fake() -> agency(),
            'departure_station' => fake() -> departure_station() ,
            'arrival_station' => fake() -> arrival_station() ,
            'departure_time' => fake() -> departure_time() ,
            'arrival_time' => fake() -> arrival_time() ,
            'train_code' => fake() -> train_code() ,
            'number_carriages' => fake() -> numberBetween(1,50) ,
            'in_time' => fake() -> boolean () ,
            'deleted' => fake() -> boolean ()
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
