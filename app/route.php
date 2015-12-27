<?php
use Bluejacket\Core\Route;
Route::root("GET","Home@index");

Route::get('/_profiler',function(){
	echo "Profiler Page";
});
?>
