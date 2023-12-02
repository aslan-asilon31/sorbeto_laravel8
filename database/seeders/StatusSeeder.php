<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StatusMaster;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusMaster::create(
            [
                'status_id' => "0",
                'name' => "not active",
                'created_at' => now(),
                'updated_at' => null,
                
            ],
        );
        StatusMaster::create(
            [
                'status_id' => "1",
                'name' => "active",
                'created_at' => now(),
                'updated_at' => null,
                
            ],
        );
        StatusMaster::create(
            [
                'status_id' => "2",
                'name' => "pending",
                'created_at' => now(),
                'updated_at' => null,
                
            ],
        );
        StatusMaster::create(
            [
                'status_id' => "3",
                'name' => "sold out",
                'created_at' => now(),
                'updated_at' => null,
                
            ],
        );
        StatusMaster::create(
            [
                'status_id' => "4",
                'name' => "on sale",
                'created_at' => now(),
                'updated_at' => null,
                
            ],
        );
    }
}
