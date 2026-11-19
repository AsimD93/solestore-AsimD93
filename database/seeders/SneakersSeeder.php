<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Sneaker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SneakersSeeder extends Seeder
{
    public function run(): void
    {
        $nike = Brand::where('name', 'Nike')->first();
        $adidas = Brand::where('name', 'Adidas')->first();
        $newBalance = Brand::where('name', 'New Balance')->first();
        $asics = Brand::where('name', 'Asics')->first();
        $puma = Brand::where('name', 'Puma')->first();
        $vans = Brand::where('name', 'Vans')->first();

        Sneaker::insert([
            [
                'name' => 'Air Force 1',
                'colorway' => 'Wit/wit',
                'release_year' => 1982,
                'description' => 'De klassieke basketschoen die nooit uit de mode raakt.',
                'brand_id' => $nike?->id,
            ],
            [
                'name' => 'Air Max 90',
                'colorway' => 'Infrared',
                'release_year' => 1990,
                'description' => 'Een iconische sneaker met zichtbare air-demping.',
                'brand_id' => $nike?->id,
            ],
            [
                'name' => 'Ultraboost',
                'colorway' => 'Zwart/grijs',
                'release_year' => 2013,
                'description' => 'Een comfortabele hardloopschoen met energierijke demping.',
                'brand_id' => $adidas?->id,
            ],
            [
                'name' => 'Superstar',
                'colorway' => 'Wit/zwart',
                'release_year' => 1969,
                'description' => 'De schoen met de herkenbare schelpvormige neus.',
                'brand_id' => $adidas?->id,
            ],
            [
                'name' => '574',
                'colorway' => 'Grijs/blauw',
                'release_year' => 1988,
                'description' => 'Een veelzijdige retro-sneaker voor elke dag.',
                'brand_id' => $newBalance?->id,
            ],
            [
                'name' => '990v5',
                'colorway' => 'Grijs',
                'release_year' => 2019,
                'description' => 'Een luxe hardloopschoen met een klassieke uitstraling.',
                'brand_id' => $newBalance?->id,
            ],
            [
                'name' => 'Gel-Kayano 14',
                'colorway' => 'Zilver/wit',
                'release_year' => 2008,
                'description' => 'Een technische hardloper met gel-demping.',
                'brand_id' => $asics?->id,
            ],
            [
                'name' => 'GEL-1130',
                'colorway' => 'Wit/grijs',
                'release_year' => 2008,
                'description' => 'Een strakke sneaker met een retro sportief profiel.',
                'brand_id' => $asics?->id,
            ],
            [
                'name' => 'Suede Classic',
                'colorway' => 'Zwart/wit',
                'release_year' => 1968,
                'description' => 'Een tijdloze suède schoen met een stevige zool.',
                'brand_id' => $puma?->id,
            ],
            [
                'name' => 'Roma 68',
                'colorway' => 'Wit/groen',
                'release_year' => 1968,
                'description' => 'Een klassieke sportschoen met een eenvoudig silhouet.',
                'brand_id' => $puma?->id,
            ],
            [
                'name' => 'Old Skool',
                'colorway' => 'Zwart/wit',
                'release_year' => 1977,
                'description' => 'De bekende skateschoen met de zijstreep.',
                'brand_id' => $vans?->id,
            ],
            [
                'name' => 'Authentic',
                'colorway' => 'Blauw/wit',
                'release_year' => 1966,
                'description' => 'De eenvoudige klassieker uit de Vans-collectie.',
                'brand_id' => $vans?->id,
            ],
        ]);
    }
}
