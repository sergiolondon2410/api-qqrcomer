<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'business_id' => 1,
            'name' => 'Hamburguesa',
            'description' => 'Hamburguesa de Res de 250 gr',
            'price' => 15000,
            'category' => 'Principal',
            'preparation_time' => '15 minutos',
            'note' => 'Lorem ipsum',
            'image' => 'https://source.unsplash.com/RZjC6H7to1M/1600x900'
        ]);

        Product::create([
            'business_id' => 1,
            'name' => 'Pizza',
            'description' => 'Jamón, Carnes y Hawaiiana',
            'price' => 12000,
            'category' => 'Principal',
            'preparation_time' => '20 minutos',
            'note' => 'Lorem ipsum',
            'image' => 'https://source.unsplash.com/_0JpjeqtSyg/1600x900'
        ]);
    }
}
