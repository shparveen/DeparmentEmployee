<?php

namespace Database\Factories;

use App\Models\EmployeeAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmployeeAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' =>$this->faker->address(),
            'pincode'=>$this->faker->numberBetween(400070,400090),
            'employee_id'=>$this->faker->numberBetween(1,3)
        ];
    }
}
