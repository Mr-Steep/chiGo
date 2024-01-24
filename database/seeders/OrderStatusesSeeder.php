<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class OrderStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('order_statuses')->insert([
            ['name' => 'unconfirmed'],
            ['name' => 'confirmed'],
            ['name' => 'unpaid'],
            ['name' => 'paid'],
            ['name' => 'shipped'],
            ['name' => 'completed'],
        ]);
    }
}
