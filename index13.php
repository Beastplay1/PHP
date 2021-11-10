<?php 


// class myclass
// {
	
// 	public $x;
// 	public function show()
// 	{
// 		echo $this -> x;
// 	}
// }

// $obj = new myclass;
// $obj -> x = 10;
// echo $obj -> x;echo "<br>";
// $obj -> show();
 
class time {
	private $hour;
	private $min;
	private $sec;

	public function show(){
		echo $this -> hour.':'.$this -> min.':'.$this -> sec;
	}

	public function sethour($h){
		if ($h >= 0 && $h <= 23) {
			$this -> hour = $h;

		}
		else{
			$this -> hour = 0;

		}
	}
	public function setmin($m){
		if ($m >= 0 && $m <= 59) {
			$this -> min = $m;

		}
		else{
			$this -> min = 0;

		}
	}
	public function setsec($s){
		if ($s >= 0 && $s <= 59) {
			$this -> sec = $s;

		}
		else{
			$this -> sec = 0;

		}
	}
	public function __construct($h,$m,$s){
		$this -> hour = date('h');
		$this -> min = date('i');
		$this -> sec = date('s');



		// $this -> sethour($h);
		// $this -> setmin($m);
		// $this -> setsec($s);
	}
		public function gethour(){
			return $this -> hour;
		}
		public function getmin(){
			return $this -> min;
		}
		public function getsec(){
			return $this -> sec;
		}
	
	public function __destruct(){
		echo "Object destructed";
	}
}

date_default_timezone_set("Asia/Yerevan");

$t = new time(5,13,8);

// $t -> hour = 14;
// $t -> min = 20;
// $t -> sec = 27;
$t -> show();






 ?>