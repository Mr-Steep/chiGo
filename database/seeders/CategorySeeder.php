<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; // Import the Str class

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $clothing = Category::create([
            'name' => 'Одежда',
            'image' => 'https://savoy.nordicmade.com/wp-content/uploads/2020/08/category-thumb-bags-backpacks.jpg',
            'image2' => 'https://savoy.nordicmade.com/wp-content/uploads/2020/12/category-icon-bags-backpacks.jpg',
            'slug' => Str::slug('Одежда'),
        ]);

        $mensClothing = $clothing->children()->create([
            'name' => 'Мужская одежда',
            'slug' => Str::slug('Мужская одежда'),
        ]);

        $womensClothing = $clothing->children()->create([
            'name' => 'Женская одежда',
            'slug' => Str::slug('Женская одежда'),
        ]);

        $mensClothing->children()->create(['name' => 'Рубашки', 'slug' => Str::slug('Рубашки')]);
        $mensClothing->children()->create(['name' => 'Штаны', 'slug' => Str::slug('Штаны')]);
        $mensClothing->children()->create(['name' => 'Трусы', 'slug' => Str::slug('Трусы')]);
        $mensClothing->children()->create(['name' => 'Носки', 'slug' => Str::slug('Носки')]);

        $womensClothing->children()->create(['name' => 'Платья', 'slug' => Str::slug('Платья')]);
        $womensClothing->children()->create(['name' => 'Перчатки', 'slug' => Str::slug('Перчатки')]);
        $womensClothing->children()->create(['name' => 'Панамка', 'slug' => Str::slug('Панамка')]);
        $womensClothing->children()->create(['name' => 'Браслет', 'slug' => Str::slug('Браслет')]);

        $technic = Category::create([
            'name' => 'Техника',
            'image' => 'https://savoy.nordicmade.com/wp-content/uploads/2020/08/category-thumb-essentials.jpg',
            'image2' => 'https://savoy.nordicmade.com/wp-content/uploads/2020/12/category-icon-essentials.jpg',
            'slug' => Str::slug('Техника'),
        ]);

        $technic->children()->create(['name' => 'Мониторы', 'slug' => Str::slug('Мониторы')]);
        $technic->children()->create(['name' => 'Мыши', 'slug' => Str::slug('Мыши')]);
        $technic->children()->create(['name' => 'Материнские платы', 'slug' => Str::slug('Материнские платы')]);

        $decor = Category::create([
            'name' => 'Декор',
            'image' => 'https://savoy.nordicmade.com/wp-content/uploads/2020/08/category-thumb-decoration.jpg',
            'image2' => 'https://savoy.nordicmade.com/wp-content/uploads/2020/12/category-icon-decoration.jpg',
            'slug' => Str::slug('Декор'),
        ]);

        $home = Category::create([
            'name' => 'Дом и Сад',
            'image' => 'https://savoy.nordicmade.com/wp-content/uploads/2020/08/category-thumb-interior.jpg',
            'image2' => 'https://savoy.nordicmade.com/wp-content/uploads/2020/12/category-icon-interior.jpg',
            'slug' => Str::slug('Дом и Сад'),
        ]);
    }
}
