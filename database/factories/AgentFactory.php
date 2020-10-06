<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\User;
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
            'agent_id' => User::factory(),
            // 'agent_id' => User::factory()->create(['user_type' => 'agent',]),
            'business_name' => $this->faker->Name(),
            'abn' => $this->faker->randomDigit(10),
            'type_of_industry' => $this->faker->realText(10),
            'commission' => '0',
            'profile_pic' => "test",
            'address' => $this->faker->Text(),
            'membership_status' => 'enable',
            'membership_end' => $this->faker->date('Y-m-d h:i:s', time()),
            'wallet' => $this->faker->randomNumber(4),
        ];
    }
}
