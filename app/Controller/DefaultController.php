<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/** Page d'accueil par défaut **/
	public function home()
	{
		$this->show('default/home');
		// $this->show('w_errors/404'); 
	}

	/** Page avec plan de site **/
	public function planSite()
	{
		$this->show('default/plan_site');
	}		

}