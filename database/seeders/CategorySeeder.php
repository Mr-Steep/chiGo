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
        $clothing = Category::create(['name' => 'Одежда', 'image'=>'https://savoy.nordicmade.com/wp-content/uploads/2020/08/category-thumb-bags-backpacks.jpg']);

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

        $technic = Category::create(['name' => 'Техника', 'image'=>'https://savoy.nordicmade.com/wp-content/uploads/2020/08/category-thumb-essentials.jpg']);

        $technic->children()->create(['name' => 'Мониторы']);
        $technic->children()->create(['name' => 'Мыши']);
        $technic->children()->create(['name' => 'Материнские платы']);

        $decor = Category::create(['name' => 'Декор', 'image'=>'https://savoy.nordicmade.com/wp-content/uploads/2020/08/category-thumb-decoration.jpg']);

        $home = Category::create(['name' => 'Дом и Сад', 'image'=>'https://savoy.nordicmade.com/wp-content/uploads/2020/08/category-thumb-interior.jpg']);



    }
}
