<?php

namespace Database\Factories;

use App\Models\Agent;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class AgentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'agent_id' => factory(User::class)->create()->id,
            // 'agent_id' => randomDigit(),
            'business_name' => $faker->Name(),
            'abn' =>'abn',
            'type_of_industry' =>'type_of_industry',
            'commission' => '0',
            'membership_status' => 'enable',
            'membership_end' => $faker->date(),
            'wallet' => '0',
            'address' => $faker->Text(),
        ];
    }
}
