<?php
namespace Application;
use Bluejacket\Framework\Core\Controller;
class HomeController extends Controller
{
	function index(){
		global $config;
		$this->view = new Framework\Core\View("home");
		$this->html = new Framework\Web\HTML();
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
