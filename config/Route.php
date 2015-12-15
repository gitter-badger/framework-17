<?php
Framework\Core\Route::root("GET",array(
	'controller' => 'home',
	'action' => 'index'
));

Framework\Core\Route::get('/home',array(
	'controller' => 'home',
	'action' => 'index'
));

Framework\Core\Route::get('/red',function(){
	$url = $_GET['u'];
	header("Location: ".$url);
});
Framework\Core\Route::get('/jadeTest',function(){
	//ini_set('memory_limit', '1024M');
	$jd = new Jade\Jade(array(
    'prettyprint' => true,
    'extension' => '.jade',
	));
	echo $jd->render('Application/template/jade/test.jade');
});

Framework\Core\Route::redirect('/about','http://bluejacket.upsfcorp.com');
?>
