<?php namespace App\Http\Controllers\Index;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Theme;

class BaseController extends Controller {

	protected $theme;
	protected $viewData = [];


	public function __construct() {
		$this->theme = Theme::uses('default');
		$this->theme->asset()->add('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js');
		$this->theme->asset()->usePath()->add('core-scripts', 'js/app.min.js');
		$this->theme->asset()->usePath()->add('core-styles', 'css/app.min.css');

	}

}
