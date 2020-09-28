<?php

namespace Database\Seeders;

use App\Models\Business;
use Illuminate\Database\Seeder;

class BusinessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Business::create([
            'name' => 'Mighty Meals',
            'description' => 'Restaurante de prueba',
            'category' => 'Comidas Rápidas',
            'email' => 'azytana@mail.com',
            'address' => 'Calle falsa 123',
            'contact' => 'Sergio Londoño',
            'web_page' => 'http://mightymeals.com',
            'logo' => 'http://images.google.com',
            'cover_image' => 'http://images.google.com',
            'qr_code' => 'http://images.google.com',
            'primary_color' => 'DD3366',
            'secondary_color' => 'AA5588',
            'note' => 'No abrimos los lunes',
            'slug' => 'mighty-meals'
        ]);

        Business::create([
            'name' => 'Sazón Paisa',
            'description' => 'Restaurante de prueba 2',
            'category' => 'Comidas Típicas',
            'email' => 'azytanapaisa@mail.com',
            'address' => 'Carrera falsa 456',
            'contact' => 'Juan Ortiz',
            'web_page' => 'http://sazonpaisa.com',
            'logo' => 'http://images.google.com',
            'cover_image' => 'http://images.google.com',
            'qr_code' => 'http://images.google.com',
            'primary_color' => 'DD3366',
            'secondary_color' => 'AA5588',
            'note' => 'Almuerzos',
            'slug' => 'sazon-paisa'
        ]);
    }
}
