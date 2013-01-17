<?php
class event{
public $organiser,$coordinator,$name;
public function __construct($n,$o,$co){
	$this->name=$n;
	$this->organiser=$o;
	$this->coordinator=$co;
}
public function addo($n){
	$this->organiser.=':'.$n;}
public function addco($nco){
	$this->coordinator.=':'.$nco;}
public function get(){
	return $this->name.':;'.$this->organiser.':;'.$this->coordinator;	
}
}
?>