<?php
class point{
	public $x;
	public $y;
	public function __construct($x,$y){
	   $this->x=$x;
	   $this->y=$y;
 }
 public function set_x(int $x){
     	$this->x=$x;
 	}
 public function set_y(int $y){
     	$this->y=$y;
 	}

 public function get_x(){
     	return $this->x;
 	}
 public function get_y(){
     	return $this->y;
 	}

//  	public function show(){
// 	echo "keti kordinatnern en: x=".$this->x."y=".$this->y."<br>";
// }


  public function __toString(){
  	return "keti kordinatnern en: x=".$this->x."y=".$this->y."<br>";
  }

}

