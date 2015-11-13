<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model {

	public static function getBySlug($slug) {
		return static::where('slug', $slug)->first();
	}

}
