<?php
namespace Application;
use Bluejacket\Core\Model;
class Example extends Model
{
	private $table = "example";

	private $scheme = array(
            "data1" => "TEXT",
            "data2" => "TEXT"
	);
}
?>
