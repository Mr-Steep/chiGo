<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $temp = [
            [
                'name'=>"Earthen Bottle",
                'image'=>"https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg",
                'price'=>48


            ],
            [
                'name'=>"Nomad Tumbler",
                'image'=>"https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg",
                'price'=>35


            ],
            [
                'name'=>"Focus Paper Refill",
                'image'=>"https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-03.jpg",
                'price'=>89


            ],
            [
                'name'=>"Machined Mechanical Pencil",
                'image'=>"https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg",
                'price'=>28


            ],

        ];


        array_filter($temp, function ($item){
            DB::table('products')->insert([
                'name'  => $item['name'],
                'image' => $item['image'],
                'price' => $item['price'],
            ]);
        });
    }
}
