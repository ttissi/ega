<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/** Page d'accueil par défaut **/
	public function home()
	{
		$this->show('default/home');
	}

	/** Page avec plan de site **/
	public function planSite()
	{
		$this->show('default/plan_site');
	}		

}