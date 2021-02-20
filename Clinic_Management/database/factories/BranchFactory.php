<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Clinic;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class BranchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Branch::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'phone_no' =>$this->faker->phoneNumber,
            'clinic_id' => Clinic::factory()->create()->id,
        ];
    }
}
