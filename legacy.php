<?php

class Animal {

	public $type, $legs, $name, $age;

	function get_info(){
		return $this->type . ' ' . $this->legs . "\n";
	}
}

class Animal extends Cat {

	public $color;

	public function set_color($color){
		$this->color = $color;
	}

	public function get_color(){
		return $this->color ? $this->color . "\n" :  " unknown group" . "\n";
	}

	public function get_info(){
		return parent::get_info(). " color: " . $this->get_color();
			 
	}

}

$soap = new Cat();

$soap->type = "cat";
$soap->legs = 4;
$soap->name = "Soap";
$soap->age = 10;
$soap->set_color("grey");


