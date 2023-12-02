<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RolesMaster;

class RolesMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RolesMaster::create(
            [
                'roles_id' => "0",
                'status_id' => "1",
                'name' => "superadmin",
                'created_at' => now(),
                'updated_at' => null,
            ],
        );
        RolesMaster::create(
            [
                'roles_id' => "1",
                'status_id' => "1",
                'name' => "admin",
                'created_at' => now(),
                'updated_at' => null,
            ],
        );
        RolesMaster::create(
            [
                'roles_id' => "2",
                'status_id' => "1",
                'name' => "sales",
                'created_at' => now(),
                'updated_at' => null,
            ],
        );
        RolesMaster::create(
            [
                'roles_id' => "2",
                'status_id' => "1",
                'name' => "cleaning service",
                'created_at' => now(),
                'updated_at' => null,
            ],
        );
        RolesMaster::create(
            [
                'roles_id' => "2",
                'status_id' => "1",
                'name' => "staff",
                'created_at' => now(),
                'updated_at' => null,
            ],
        );
        RolesMaster::create(
            [
                'roles_id' => "2",
                'status_id' => "1",
                'name' => "manager",
                'created_at' => now(),
                'updated_at' => null,
            ],
        );
        RolesMaster::create(
            [
                'roles_id' => "2",
                'status_id' => "1",
                'name' => "visitor",
                'created_at' => now(),
                'updated_at' => null,
            ],
        );
        RolesMaster::create(
            [
                'roles_id' => "2",
                'status_id' => "1",
                'name' => "supervisor",
                'created_at' => now(),
                'updated_at' => null,
            ],
        );
        RolesMaster::create(
            [
                'roles_id' => "2",
                'status_id' => "1",
                'name' => "ceo",
                'created_at' => now(),
                'updated_at' => null,
            ],
        );
        RolesMaster::create(
            [
                'roles_id' => "2",
                'status_id' => "1",
                'name' => "cto",
                'created_at' => now(),
                'updated_at' => null,
            ],
        );
    }
}
