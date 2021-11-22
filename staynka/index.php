<?php
spl_autoload_register(function ($file){
	include ("$file.php");
});

$par = new parking(2,2);
$car = new car("Merscedes","White","50 FF 500");
$truck = new truck("BMW","Black","60 TT 600");
$car->getplace($par);
$truck->getplace($par);
$car->remove_place($par);
echo "<pre>";
print_r($par);
