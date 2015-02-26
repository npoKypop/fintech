<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 26.02.2015
 * Time: 13:16
 */

namespace App\Controllers\Site;

use App\Controllers\BaseController;

class GallerController extends BaseController
{

	public $layout = 'main';

	public function galler()
	{
		return $this->make('galler');
	}


}