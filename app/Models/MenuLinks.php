<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuLinks extends Model {

	protected $table = 'menu_links';

	protected $fillable = [
		'title',
		'link',
		'menu_id',
		'weight'
	];

	public function menu() {
		return $this->belongsTo('\App\Model\Menu');
	}

}
