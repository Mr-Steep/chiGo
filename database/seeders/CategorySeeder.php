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
        $clothingId = DB::table('categories')->insertGetId(['name' => 'Одежда', 'parent_id' => null]);

        $mensClothingId   = DB::table('categories')->insertGetId(['name' => 'Мужская одежда', 'parent_id' => $clothingId]);
        $womensClothingId = DB::table('categories')->insertGetId(['name' => 'Женская одежда', 'parent_id' => $clothingId]);

        DB::table('categories')->insert(['name' => 'Рубашки', 'parent_id' => $mensClothingId]);
        DB::table('categories')->insert(['name' => 'Штаны', 'parent_id' => $mensClothingId]);
        DB::table('categories')->insert(['name' => 'Трусы', 'parent_id' => $mensClothingId]);
        DB::table('categories')->insert(['name' => 'Носки', 'parent_id' => $mensClothingId]);

        // Создаем подкатегории для "Женская одежда"
        DB::table('categories')->insert(['name' => 'Платья',  'parent_id' => $womensClothingId]);
        DB::table('categories')->insert(['name' => 'Носки',   'parent_id' => $womensClothingId]);
        DB::table('categories')->insert(['name' => 'Панамка', 'parent_id' => $womensClothingId]);
        DB::table('categories')->insert(['name' => 'Браслет', 'parent_id' => $womensClothingId]);

        $TechnicId = DB::table('categories')->insertGetId(['name' => 'Техника', 'parent_id' => null]);
        $mensClothingId   = DB::table('categories')->insertGetId(['name' => 'Мониторы', 'parent_id' => $TechnicId]);
        $womensClothingId = DB::table('categories')->insertGetId(['name' => 'Мыши', 'parent_id' => $TechnicId]);
        $womensClothingId = DB::table('categories')->insertGetId(['name' => 'Материнские платы', 'parent_id' => $TechnicId]);


    }
}
