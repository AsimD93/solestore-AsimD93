<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    public function run(): void
    {
        Brand::insert([
            [
                'name' => 'Nike',
                'country' => 'Verenigde Staten',
                'description' => 'Sportieve sneakers en hardloopschoenen',
            ],
            [
                'name' => 'Adidas',
                'country' => 'Duitsland',
                'description' => 'Klassieke en moderne sportschoenen',
            ],
            [
                'name' => 'New Balance',
                'country' => 'Verenigde Staten',
                'description' => 'Comfortabele sneakers met een retro-uitstraling',
            ],
            [
                'name' => 'Asics',
                'country' => 'Japan',
                'description' => 'Schoenen voor hardlopers en sportliefhebbers',
            ],
            [
                'name' => 'Puma',
                'country' => 'Duitsland',
                'description' => 'Sneakers met een sportieve en stijlvolle look',
            ],
            [
                'name' => 'Vans',
                'country' => 'Verenigde Staten',
                'description' => 'Skateschoenen met een iconisch profiel',
            ],
        ]);
    }
}
