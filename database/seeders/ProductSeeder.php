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
                'name'        => "Earthen Bottle",
                'image'       => "https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg",
                'price'       => 48,
                'category_id' => 5
            ],
            [
                'name'        => "Nomad Tumbler",
                'image'       => "https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg",
                'price'       => 35,
                'category_id' => 4
            ],
            [
                'name'        => "Focus Paper Refill",
                'image'       => "https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-03.jpg",
                'price'       => 89,
                'category_id' => 5
            ],
            [
                'name'        => "Machined Mechanical Pencil",
                'image'       => "https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg",
                'price'       => 28,
                'category_id' => 4
            ],
            [
                'name'        => "Medium Stuff Satchel",
                'image'       => "https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-02.jpg",
                'price'       => 32,
                'category_id' => 5
            ],
            [
                'name'        => "Throwback Hip Bag",
                'image'       => "https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg",
                'price'       => 90,
                'category_id' => 4
            ],
        ];

        for ($i = 0; $i < 34; $i++) {
            $temp[] = [
                'name'        => "Product " . ($i + 7),
                'image'       => "https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-0".rand(1, 8).".jpg",
                'price'       => rand(20, 100),
                'category_id' => rand(2, 15)
            ];
        }

        array_filter($temp, function ($item){
            DB::table('products')->insert([
                'name'        => $item['name'],
                'image'       => $item['image'],
                'price'       => $item['price'],
                'category_id' => $item['category_id']
            ]);
        });
    }
}
