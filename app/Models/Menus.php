<?php namespace App\Models;


class Menus extends BaseModel {

	protected $table = 'menus';

	protected $fillable = [
		'title',
		'slug'
	];

	public function links() {
		return $this->hasMany('\App\Models\MenuLinks', 'menu_id');
	}
}
