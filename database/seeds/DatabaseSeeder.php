<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        

       return [
        'first_name' => $this->faker->first_name,
        'last_name' => $this->faker->last_name,
        'dob' => $this->faker->dob,
        
        'address' => $this->faker->address,
       ];
        }
    }
