<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create(
            [
                'departemen_id' => "IT-1121",
                'full_name' => "aslan131",
                'photo' => '2.png',
                'address' => "bandung",
                'mobile' => "082239487457",
                'status' => "admin",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        Employee::create(
            [
                'departemen_id' => "IT-1121",
                'full_name' => "aslan18",
                'photo' => '2.png',
                'address' => "pekalongan",
                'mobile' => "082239487457",
                'status' => "admin",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        Employee::create(
            [
                'departemen_id' => "IT-1121",
                'full_name' => "aslan15",
                'photo' => '2.png',
                'address' => "purwakarta",
                'mobile' => "082239487457",
                'status' => "admin",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        Employee::create(
            [
                'departemen_id' => "IT-1121",
                'full_name' => "aslan200",
                'photo' => '2.png',
                'address' => "banten",
                'mobile' => "082239487457",
                'status' => "admin",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        Employee::create(
            [
                'departemen_id' => "IT-1121",
                'full_name' => "53",
                'photo' => '2.png',
                'address' => "medan",
                'mobile' => "082239487457",
                'status' => "manager",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        Employee::create(
            [
                'departemen_id' => "IT-1121",
                'full_name' => "aslan42",
                'photo' => '2.png',
                'address' => "jakarta",
                'mobile' => "082239487457",
                'status' => "admin",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        Employee::create(
            [
                'departemen_id' => "IT-1121",
                'full_name' => "aslan5",
                'photo' => '2.png',
                'address' => "palembang",
                'mobile' => "082239487457",
                'status' => "admin",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        Employee::create(
            [
                'departemen_id' => "IT-1121",
                'full_name' => "aslan3",
                'photo' => '3.png',
                'address' => "surabaya",
                'mobile' => "082239487457",
                'status' => "admin",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        Employee::create(
            [
                'departemen_id' => "IT-1121",
                'full_name' => "aslan2",
                'photo' => '2.png',
                'address' => "bandung",
                'mobile' => "082239487457",
                'status' => "admin",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );

        Employee::create(
            [
                'departemen_id' => "IT-1121",
                'full_name' => "aslan1",
                'photo' => '2.png',
                'address' => "jakarta",
                'mobile' => "082239487457",
                'status' => "admin",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        );
    }
}
