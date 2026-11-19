<?php

use App\Models\Brand;
use App\Models\Sneaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('renders the static pages', function (string $path) {
    $this->get($path)->assertOk();
})->with(['/', '/over', '/contact']);

it('lists the seeded brands and sneakers', function () {
    $this->seed();

    expect(Brand::count())->toBeGreaterThanOrEqual(5);
    expect(Sneaker::count())->toBeGreaterThanOrEqual(10);

    $this->get('/brands')->assertOk()->assertSee('Nike');
    $this->get('/sneakers')->assertOk()->assertSee('Air Force 1')->assertSee('Nike');
});

it('shows the brand of a sneaker on its detail page', function () {
    $brand = Brand::create([
        'name' => 'Testmerk',
        'country' => 'Nederland',
        'description' => 'Een merk voor deze test',
    ]);

    $sneaker = Sneaker::create([
        'name' => 'Testschoen',
        'colorway' => 'Zwart/wit',
        'release_year' => 2026,
        'description' => 'Een sneaker voor deze test',
        'brand_id' => $brand->id,
    ]);

    $this->get("/sneakers/{$sneaker->id}")
        ->assertOk()
        ->assertSee('Testschoen')
        ->assertSee('Testmerk');
});

it('returns 404 for an unknown brand or sneaker id', function (string $path) {
    $this->get($path)->assertNotFound();
})->with(['/brands/999', '/sneakers/999']);
