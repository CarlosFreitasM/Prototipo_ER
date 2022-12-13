<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fullname_cliente'=>$this->faker->name(),
            'email_report'=>$this->faker->email(),
            'phone_report'=>$this->faker->phoneNumber(),
            'description'=>$this->faker->text(),
            'tag'=>Tag::all()->random()->id,
            'state'=>State::all()->random()->id,

        ];
    }
}
