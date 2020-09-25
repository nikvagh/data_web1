<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'customer_id' => factory(Customer::class)->create()->id,
            'agent_id' => factory()->create()->id,
            'address' =>'address',
            'abn' => 'abn',
            'name' => $faker->Name(),
        ];
    }
}
