<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IceCream;

class IceCreamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IceCream::create(
            [
                'ice_cream_id' => "0",
                'status_id' => "4",
                'name' => "Concerto Choco Passion",
                'flavor' => "",
                'color' => "",
                'price' => 1,
                'stock' => 1,
                'type' => "",
                'created_at' => now(),
                'updated_at' => null,
            ],
        );
        IceCream::create(
            [
                'ice_cream_id' => "1",
                'status_id' => "4",
                'name' => "Concerto Midi - Cookies n Creamy",
                'flavor' => "",
                'color' => "",
                'price' => 1,
                'stock' => 1,
                'type' => "",
                'created_at' => now(),
                'updated_at' => null,
            ],
        );
        IceCream::create(
            [
                'ice_cream_id' => "2",
                'status_id' => "4",
                'name' => "Concerto Midi - Strawberry",
                'flavor' => "",
                'color' => "",
                'price' => 1,
                'stock' => 1,
                'type' => "",
                'created_at' => now(),
                'updated_at' => null,
            ],
        );
    }
}
