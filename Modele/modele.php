<?php
class Modele{
	public $data=array(
		'01'=>'Tom',
		'02'=>'Jack',
		'03'=>'Lisa',
		);
	public function Getid($key){
		return $this->data[$key];
	}
}
?>