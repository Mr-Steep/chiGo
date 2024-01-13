<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Создаем корневую категорию "Одежда"
        $clothingId = DB::table('categories')->insertGetId(['name' => 'Одежда', 'parent_id' => null]);

        // Создаем подкатегории для "Одежда"
        $mensClothingId   = DB::table('categories')->insertGetId(['name' => 'Мужская одежда', 'parent_id' => $clothingId]);
        $womensClothingId = DB::table('categories')->insertGetId(['name' => 'Женская одежда', 'parent_id' => $clothingId]);

        // Создаем подкатегории для "Мужская одежда"
        DB::table('categories')->insert(['name' => 'Рубашки', 'parent_id' => $mensClothingId]);

        // Создаем подкатегории для "Женская одежда"
        DB::table('categories')->insert(['name' => 'Платья', 'parent_id' => $womensClothingId]);
    }
}
