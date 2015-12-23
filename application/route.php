<?php
use Bluejacket\Core\Route;
Route::root("GET",array(
	'controller' => 'home',
	'action' => 'index'
));

Route::get('/home',array(
	'controller' => 'home',
	'action' => 'index'
));

Route::get('/red',function(){
	$url = $_GET['u'];
	header("Location: ".$url);
});

Route::redirect('/about','http://bluejacket.io');
?>
