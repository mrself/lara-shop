<?php

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder {

	public function run() {
		Products::truncate();

		Products::create([
			'title' => 'Product',
			'slug' => 'product',
			// ''
		]);
	}
}