<?php
namespace App\Controller;
use Bluejacket\Core\Controller;
use Twig_Loader_Filesystem;
use Twig_Environment;
class Home extends Controller
{
    function index(){
        
        $loader = new Twig_Loader_Filesystem('app/View/home');
        $twig = new Twig_Environment($loader, array(
            'cache' => false,
        ));
        $template = $twig->loadTemplate('homepage.html.twig');
        echo $template->render(array(
            "server" => $_SERVER
        ));
    }
}
?>
