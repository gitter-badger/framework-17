<?php
namespace Application\Model;
use Framework\Core\Model;
class Example extends Model
{
	public function table(){
		return 'example';
	}
	public function search(){
			return array();
		}
	}
?>
