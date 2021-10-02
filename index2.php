<?php 

//1
$a = rand(1, 12);


while (true) {
	
	if ($a == 7 || $a == 2 || $a == 11) {
		echo $a."<br>";
		echo "Вы выиграли!";
		break;
	}

	else if ($a == 3 || $a == 12) {
		echo $a."<br>";
		echo "Вы проиграли!";
		break;
	}

	else{
		echo $a++."<br>";
	}


}


//2 

// $n = rand(1, 100);
// $k = rand(1, 100);

// while (true) {

// 	echo "Napastak: ".$n;
	
// 	switch ($n) {
// 		case ($n <= 20):
// 			echo -0;
// 			break;

// 		case ($n >= 20 || $n <= 40):
// 			echo +9;
// 			break;
		
// 		case ($n >= 40 || $n <= 60):
// 			echo -12;
// 			break;

// 		case ($n >= 60 || $n <= 80):
// 			echo +1;
// 			break;

// 		case ($n >= 80 || $n <= 100):
// 			echo -2;
// 			break;

// 		case ($n == 100):
// 			echo "Haxtec Napastaky";
// 			break;
// 	}

// }

 ?>







