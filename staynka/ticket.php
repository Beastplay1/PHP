<?php 

class ticket{
	public $number;
	public $start_time;
	public $end_time;
	public $type;
	function __construct($n,$s,$e,$t){
		$this->number=$n;
		$this->start_time=$s;
		$this->end_time=$e;
		$this->type=$t;
	}
}
