<?php

use Illuminate\Database\Seeder;
use App\Models\Menus;

class MenusSeeder extends Seeder {

	public function run() {
		Menus::truncate();

		Menus::create([
			'title' => 'Main menu',
			'slug' => 'main-menu'
		]);
	}
}