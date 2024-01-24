<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('shippings')->insert([
            ['name' => 'land', 'shipping_cost' => 13.32],
            ['name' => 'air', 'shipping_cost' => 31.57],

        ]);
    }
}
