<?php
use Bluejacket\Core\Route;
Route::root("GET",array(
	'controller' => 'home',
	'action' => 'index'
));

Route::get('/_profiler',function(){
	echo "Profiler Page";
});
?>
