<?php 
abstract  class machine{
	public $firm;
	public $color;
	public $number;
	public function __construct($f,$c,$n){
		$this->firm=$f;
		$this->color=$c;
		$this->number=$n;
	}
	public function getplace(parking $p){
		$this->ticket=$p->give_place($this);
	}
	public function remove_place(parking $p){
		$p->place_free($this);
		unset($this->ticket);

	}

}