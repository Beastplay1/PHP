<?php 

print_r($_POST);
$login = $_REQUEST['login'];
$password = $_REQUEST['password'];

// $a = substr($login, -3, 3);
// $b = substr($login, 0,3);

// if ($a === $password || $b === $password) {
// 	$msg = "Welcome!";
// }
// else{
// 	$msg = "Try again";
// }

// $pos = strpos($login, $password);

// if ($pos !== false) {
// 	$msg = "Welcome!";
// }
// else{
// 	$msg = "Try again";
// }

$cmp = strncmp($login, $password, 3);
if ($cmp === 0) {
	$msg = "Welcome!";
}
else{
	$msg = "Try again";
}

$cmpr = strrev($login);
$cmpr = strncmp($login, $password, 3);

header("location:index4.php?msg=$msg" );


 ?>