<?php

use Illuminate\Database\Seeder;
use App\Models\MenuLinks;

class MenuLinksSeeder extends Seeder {

	public function run() {
		MenuLinks::truncate();

		MenuLinks::create([
			'title' => 'Home',
			'link' => '/',
			'menu_id' => 1,

		]);
	}
}