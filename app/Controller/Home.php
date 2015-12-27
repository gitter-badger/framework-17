<?php
namespace App\Controller;
use Bluejacket\Core\Controller;
class Home extends Controller
{
    function index(){
        
        $loader = new Twig_Loader_Filesystem('app/View/home');
        $twig = new Twig_Environment($loader, array(
            'cache' => 'app/Cache',
        ));
        $template = $twig->loadTemplate('index.html');
        echo $template->render();
    }
}
?>
