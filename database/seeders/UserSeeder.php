<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

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
                'name' => "aslan112",
                'email' => "aslan112@gmail.com",
                'email_verified_at' => now(),
                'password' => "aslan11",
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
                'name' => "aslan212",
                'email' => "aslan212@gmail.com",
                'email_verified_at' => now(),
                'password' => "aslan212",
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
                'name' => "aslan412",
                'email' => "aslan412@gmail.com",
                'email_verified_at' => now(),
                'password' => "aslan41",
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
                'name' => "aslan51",
                'email' => "aslan51@gmail.com",
                'email_verified_at' => now(),
                'password' => "aslan51",
                            'photo' => $faker->imageUrl(),
            'phone_number' => $faker->numberBetween(8,15),
            'is_active' => $faker->numberBetween(0,1),
            'remember_token' => Str::random(10),
                'updated_at' => null,
            ],
        );

        User::create(
            [
                            'user_id' => $faker->numberBetween(100,500),
            'company_id' => $faker->numberBetween(1,10),
            'role_id' => $faker->numberBetween(1,5),
            'sales_level_id' => $faker->numberBetween(1,5),
                'name' => "aslan5",
                'email' => "aslan5@gmail.com",
                'email_verified_at' => now(),
                'password' => "aslan51",
                            'photo' => $faker->imageUrl(),
            'phone_number' => $faker->numberBetween(8,15),
            'is_active' => $faker->numberBetween(0,1),
            'remember_token' => Str::random(10),
                'updated_at' => null,
            ],
        );


        User::create(
            [
               'user_id' => $faker->numberBetween(100,500),
            'company_id' => $faker->numberBetween(1,10),
            'role_id' => $faker->numberBetween(1,5),
            'sales_level_id' => $faker->numberBetween(1,5),
                'name' => "aslan4",
                'email' => "aslan4@gmail.com",
                'email_verified_at' => now(),
                'password' => "aslan41",
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
                'name' => "aslan3",
                'email' => "aslan3@gmail.com",
                'email_verified_at' => now(),
                'password' => "aslan31",
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
                'name' => "aslan2",
                'email' => "aslan2@gmail.com",
                'email_verified_at' => now(),
                'password' => "aslan21",
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
                'name' => "aslan1",
                'email' => "aslan11@gmail.com",
                'email_verified_at' => now(),
                'password' => "aslan11",
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
                'name' => "aslan512",
                'email' => "aslan512@gmail.com",
                'email_verified_at' => now(),
                'password' => "aslan51",
                            'photo' => $faker->imageUrl(),
            'phone_number' => $faker->numberBetween(8,15),
            'is_active' => $faker->numberBetween(0,1),
            'remember_token' => Str::random(10),
                'updated_at' => null,
            ],
        );

        User::create(
            [
                            'user_id' => $faker->numberBetween(100,500),
            'company_id' => $faker->numberBetween(1,10),
            'role_id' => $faker->numberBetween(1,5),
            'sales_level_id' => $faker->numberBetween(1,5),
                'name' => "aslan11",
                'email' => "aslan11@gmail.com",
                'email_verified_at' => now(),
                'password' => "aslan11",
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
                'name' => "aslan41",
                'email' => "aslan41@gmail.com",
                'email_verified_at' => now(),
                'password' => "aslan41",
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
                'name' => "aslan21",
                'email' => "aslan21@gmail.com",
                'email_verified_at' => now(),
                'password' => "aslan21",
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
                'name' => "aslan31",
                'email' => "aslan31@gmail.com",
                'email_verified_at' => now(),
                'password' => "aslan31",
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
