<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends BaseModel {

	protected $table = 'products';

	protected $fillable = [
		'title',
		'slug',
		'options_group_id',
		'attributes_group_id'
	];

}
