<?php

//1.

echo (int) 4.7;
echo "<br>";
echo (string) 4.7;
#echo (array) 4.7; #error
echo "<br>";
#$a = (float) "4.7";
#echo "<br>";
echo (double) 4.7;
#echo gettype($a);
echo "<br>";
echo (bool) 4.7;
echo "<br>";
#echo (null) 4.7; #error

//2.

// for ($i=1; $i <= 100; $i++) { 
// 	echo $i;
// 	if ($i % 5 == 0) {
// 		echo "<br>";	
// 	}
// }

// $i = 0;

// while ($i < 100) {
// 	$i++;
// 	echo $i;
// 	if ($i % 5 == 0) {
// 		echo "<br>";	
// 	}
// }

// $i = 0;

// do {
// 	$i++;
// 	echo $i;
// 	if ($i % 5 == 0) {
// 		echo "<br>";
// 	}
// } while ($i < 100);

//3.

// for ($i=1; $i <= 100;) { 
// 	if ($i % 3 == 0) {
// 		$i++;
// 	}
// 	else{
// 		echo $i.' ';
// 		$i++;
// 	}
// }

// $i = 1;
// while ($i <= 100) {
//     if ($i % 3 == 0) {
//         $i++ . ' ';
//     }
//     else{
// 		echo $i.' ';
// 		$i++;    	
//     }
// }

// $i = 1;
// do {
// 	if ($i % 3 == 0) {
// 		$i++.' ';
// 	}
// 	else{
// 		echo $i.' ';
// 		$i++;
// 	}
// } while ($i <= 100);

//4.

$c1 = 0;
$c2 = 0;
$c3 = 0;
$c4 = 0;
$c5 = 0;
$c6 = 0;


for ($i=0; $i <= 6000; $i++) { 


	$num = rand(1, 6);

	switch ($num) {
		case 1:
			$c1++;
			break;
		
		case 2:
			$c2++;
			break;

		case 3:
			$c3++;
			break;

		case 4:
			$c4++;
			break;
			
		case 5:
			$c5++;
			break;

		case 6:
			$c6++;
			break;	
	}
}
echo "Number 1 rolled ".$c1." times"."<br>";
echo "Number 2 rolled ".$c2." times"."<br>";
echo "Number 3 rolled ".$c3." times"."<br>";
echo "Number 4 rolled ".$c4." times"."<br>";
echo "Number 5 rolled ".$c5." times"."<br>";
echo "Number 6 rolled ".$c6." times";

?>
