<?php

namespace Database\Factories;

use App\Model\UserFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Model\User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
  public function defination() 
  {
    return [
        'first_name' => $this->faker->first_name,
        'last_name' => $this->faker->last_name,
        'dob' => $this->faker->dob,
        'class' => $this->faker->class(array('class1','class2')),
        'address' => $this->faker->address,
        'country' => $this->faker->country(array('country1','country2')),
        'state' => $this->faker->state(array('state1','state2')),
        'city' => $this->faker->city(array('city1','city2')),
        'status' => $this->faker->status,
        'email_verified_at' => now(),
        
    ];
}
}
