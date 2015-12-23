<?php
namespace Application;
use Bluejacket\Core\Controller;
class HomeController extends Controller
{
	function index(){
		global $config;
		$this->view = new Bluejacket\Core\View("home");
		$this->html = new Bluejacket\Web\HTML();
		$this->view->set("title",$this->html->title($config['title']));
		$this->view->set("temp_dir","Application/template/home");

		$header = $this->html->head(array(
			"title" => $config['title'],
			"bower" => "Application/bower_components/"
		));
		$this->view->set("head",$header);
		$this->view->load("homepage");
	}
}
?>
