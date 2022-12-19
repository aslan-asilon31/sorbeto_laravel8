<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => "aslan112",
                'age' => 15,
                'email' => "aslan112@gmail.com",
                'password' => "aslan11",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        User::create(
            [
                'name' => "aslan212",
                'age' => 20,
                'email' => "aslan212@gmail.com",
                'password' => "aslan212",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        User::create(
            [
                'name' => "aslan412",
                'age' => 22,
                'email' => "aslan412@gmail.com",
                'password' => "aslan41",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        User::create(
            [
                'name' => "aslan51",
                'age' => 21,
                'email' => "aslan51@gmail.com",
                'password' => "aslan51",
                'updated_at' => null,
            ],
        );

        User::create(
            [
                'name' => "aslan5",
                'age' => 21,
                'email' => "aslan5@gmail.com",
                'password' => "aslan51",
                'updated_at' => null,
            ],
        );

        User::create(
        );

        User::create(
            [
                'name' => "aslan4",
                'age' => 22,
                'email' => "aslan4@gmail.com",
                'password' => "aslan41",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        
        User::create(
            [
                'name' => "aslan3",
                'age' => 22,
                'email' => "aslan3@gmail.com",
                'password' => "aslan31",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        User::create(
            [
                'name' => "aslan2",
                'age' => 20,
                'email' => "aslan2@gmail.com",
                'password' => "aslan21",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        User::create(
            [
                'name' => "aslan1",
                'age' => 25,
                'email' => "aslan11@gmail.com",
                'password' => "aslan11",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        User::create(
            [
                'name' => "aslan512",
                'age' => 21,
                'email' => "aslan512@gmail.com",
                'password' => "aslan51",
                'updated_at' => null,
            ],
        );

        User::create(
            [
                'name' => "aslan11",
                'age' => 15,
                'email' => "aslan11@gmail.com",
                'password' => "aslan11",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        User::create(
            [
                'name' => "aslan41",
                'age' => 15,
                'email' => "aslan41@gmail.com",
                'password' => "aslan41",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        User::create(
            [
                'name' => "aslan21",
                'age' => 20,
                'email' => "aslan21@gmail.com",
                'password' => "aslan21",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        User::create(
            [
                'name' => "aslan31",
                'age' => 22,
                'email' => "aslan31@gmail.com",
                'password' => "aslan31",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );


    
    }
}
