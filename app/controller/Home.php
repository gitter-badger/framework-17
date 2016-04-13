<?php
namespace App\Controller;
class Home extends Controller {
	function index() {
		$this->twig()->loadTemplate('home/homepage.html.twig')->render(array(
				'server' => $_SERVER,
			));
	}
}
