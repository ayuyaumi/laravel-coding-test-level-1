<?php

namespace Database\Factories;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $start_date = Carbon::instance($this->faker->dateTimeBetween('-1 months','+1 months'));

        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->unique()->slug(),
            'start_at' => $start_date,
            'end_at' => (clone $start_date)->addDays(random_int(0,14)),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
