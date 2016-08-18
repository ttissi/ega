<?php

namespace Controller;

use \W\Controller\Controller;

class PracticeController extends Controller
{

	/** Page d'accès au Practice **/
	public function accesPractice()
	{
		$this->show('practice/acces_practice');
	}

}