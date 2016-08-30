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

	/** Page avec les horaires du practice **/
	public function horairesPractice()
	{
		$this->show('practice/horaires_practice');
	}

}