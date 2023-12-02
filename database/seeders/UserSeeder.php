<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(500)->create();

        $faker = FakerFactory::create();

        User::create(
            [
                'user_id' => $faker->numberBetween(100,500),
                'company_id' => $faker->numberBetween(1,10),
                'role_id' => $faker->numberBetween(1,5),
                'sales_level_id' => $faker->numberBetween(1,5),
                'name' => "aslanasilon",
                'email' => "aslanasilon@gmail.com",
                'email_verified_at' => now(),
                'password' => Hash::make('aslanasilon'),
                'photo' => $faker->imageUrl(),
                'phone_number' => $faker->numberBetween(8,15),
                'is_active' => $faker->numberBetween(0,1),
                'remember_token' => Str::random(10),
                'created_at' => new \DateTime,
                'updated_at' => null,
                
            ],
        );

        User::create(
            [
                'user_id' => $faker->numberBetween(100,500),
                'company_id' => $faker->numberBetween(1,10),
                'role_id' => $faker->numberBetween(1,5),
                'sales_level_id' => $faker->numberBetween(1,5),
                'name' => "aslanasilon1",
                'email' => "aslanasilon1@gmail.com",
                'email_verified_at' => now(),
                'password' => Hash::make('aslanasilon1'),
                'photo' => $faker->imageUrl(),
                'phone_number' => $faker->numberBetween(8,15),
                'is_active' => $faker->numberBetween(0,1),
                'remember_token' => Str::random(10),
                'created_at' => new \DateTime,
                'updated_at' => null,
                
            ],
        );

      
    }
}
