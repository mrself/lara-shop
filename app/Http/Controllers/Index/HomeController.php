<?php namespace App\Http\Controllers\Index;

use App\Http\Requests;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends BaseController {

	public function __construct() {
		parent::__construct();

	}

	public function index() {
		$products = Products::all();

		return $this->theme->scope('home.index', compact('products'))->render();
	}

}
