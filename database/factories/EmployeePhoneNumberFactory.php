<?php

namespace Database\Factories;

use App\Models\EmployeePhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeePhoneNumberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmployeePhoneNumber::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [        
            'phone_number' =>$this->faker->numberBetween(8888888878,9999999999),
            'employee_id'=>$this->faker->numberBetween(1,3)
        ];
    }
}
