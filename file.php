<?php 
session_start();
print_r($_POST);
$string = $_REQUEST['string'];
$str = $_REQUEST['str'];

$length = strlen($str);

// $a = substr($string, 0, $length);
// $b = substr($string, -$length);

// if ($a === $str) {
// 	$msg = "gtnvel e skzbum";
// }

// if($b === $str){
// 	$msg = "gtnvel e verjum";
// }

$pos = strpos($string, $str);

if ($pos === 0) {
	$msg = "gtnvel e skzbum";
}

$pos = strrpos($string, $str);

if ($pos === strlen($string) - $length) {
	
	$msg = "gtnvel e verjum";
}


// $cmp = strncmp($string, $str, $length);
// if ($cmp === 0) {
// 	$msg = "gtnvel e skzbum";
// }

// $cmpr = strrev($string);
// $cmpp = strrev($str);

// $cmpr = strncmp($cmpr, $cmpp, $length);
// if ($cmpr === 0) {
// 	$msg = "gtnvel e verjum";
// }

$_SESSION['msg'] = $msg;
header("location:index4.php" );


 ?>