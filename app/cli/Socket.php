<?php
/*
 * Example Socket Cli
 * */
namespace App\Cli;
use Bluejacket\Connector\WebSocket;
class Socket 
{
	public static function server(){
		return WebSocket(array(
			"ip" => "0.0.0.0",
			"port" => "9666",
			"commands" => array(
				"HELLO" => function(){
					print "Hello World!";
				}
			)
		))->server();
	}
	
	public static function client(){
		return WebSocket(array(
			"ip" => "0.0.0.0",
			"port" => "9666",
			"success" => function($output){
				print "GET CONTENT SUCCESS!\n";
				print $output."\n";
			},
			"error" => function($error){
				print "ERROR MESSAGE:\n";
				print $error."\n";
			}
		))->client();
	}
}