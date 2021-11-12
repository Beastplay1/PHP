<?php
$width1=$_POST['width'];
$height1=$_POST['height'];
$bc1=$_POST['bc'];

class button{
public $width;
public $height;
public $bc;
public function __construct($w,$h,$bcr){
	$this->width=$w;
	$this->height=$h;
	$this->bc=$bcr;

}

public function show(){
	$width=$this->width."px";
	$height=$this->height."px";
	$bc=$this->bc;
	echo "<button style='background-color:$bc; width:$width;height:$height'></button><br>";
}
}


$obj=new button($width1,$height1,$bc1);
$obj->show();




 