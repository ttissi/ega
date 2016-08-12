<?php

namespace Controller;

use \W\Controller\Controller;

class BureauController extends Controller
{

	/** Page pour la composition du bureau **/
	public function compositionBureau()
	{
		$this->show('bureau/composition');
	}

	/** Page A propos de l'association **/
	public function about()
	{
		$this->show('bureau/qui_sommes_nous');
	}

	/** Page pour contacter l'association **/
	public function contact()
	{
		$this->show('bureau/contact');
	}

	/** Page des Mentions Légales **/
	public function mentionsLegales()
	{
		$this->show('bureau/mentions_legales');
	}

}