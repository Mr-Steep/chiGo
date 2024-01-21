<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $clothing = Category::create(['name' => 'Одежда']);

        $mensClothing   = $clothing->children()->create(['name' => 'Мужская одежда']);
        $womensClothing = $clothing->children()->create(['name' => 'Женская одежда']);

        $mensClothing->children()->create(['name' => 'Рубашки']);
        $mensClothing->children()->create(['name' => 'Штаны']);
        $mensClothing->children()->create(['name' => 'Трусы']);
        $mensClothing->children()->create(['name' => 'Носки']);

        // Создаем подкатегории для "Женская одежда"
        $womensClothing->children()->create(['name' => 'Платья']);
        $womensClothing->children()->create(['name' => 'Носки']);
        $womensClothing->children()->create(['name' => 'Панамка']);
        $womensClothing->children()->create(['name' => 'Браслет']);

        $technic = Category::create(['name' => 'Техника']);

        $technic->children()->create(['name' => 'Мониторы']);
        $technic->children()->create(['name' => 'Мыши']);
        $technic->children()->create(['name' => 'Материнские платы']);


    }
}
