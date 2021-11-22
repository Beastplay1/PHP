<?php 
class myclass {
	public $name;
	public $surname;
	public $age;
	public function __invoke($x){

		echo $x+$x;
	}
	public function __clone(){
		$this->name = "Arman";
	}
	public function __call($a,$b){
		$start = substr($a,0,3 );
		$end = substr($a,3);
		if($start === "set"){
			if(property_exists($this,$end)){
				$this->$end = $b[0];
			}
		    else{
			   echo 'Aydpisi funkcia goyutyun chuni';
		    }
		}
		elseif($start==="get"){
			if(property_exists($this,$end)){
				return $this->$end;
			}
			 else{
			   echo 'Aydpisi funkcia goyutyun chuni';
		    }
		}
		else{
			echo 'Aydpisi funkcia goyutyun chuni';
		}

	}
}
$obj = new myclass;
// $obj(25);
$obj1 = new myclass;
$obj2 = clone $obj1;  
// print_r($obj1);
$obj-> setname("Arman");
$obj-> setsurname("Hakobyan");
$obj-> setage(17);
echo $obj-> getage();
echo $obj-> getname();
echo $obj-> getsurname();
// echo "<pre>";
print_r($obj);
