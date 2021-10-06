<?php

#$arr = [-10,-9,-8,-7,-6,-5,-4,-3,-2,-1,0,1,2,3,4,5,6,7,8,9,10];

#$len = count($arr);

#$num = 0;

#for ($i=0;$i < $len;$i++) {
#if($arr[$i] < 0) {
 #  $num++;
#}
#}

#echo $num;

#for($i=0;$i < $len;$i++) {
#if($arr[$i] > 0 && $arr[$i] % 2 == 0) {
#echo $i."<br>";
#}
#}

#$a = 0;

#for($i=0;$i < $len;$i++) {
   #if($arr[$i] > 0) {
      # $a += $arr[$i];
#}

#echo $a;

$arr = [];


  for($i=1;$i < 101;$i++) {
    $arr[] = $i;
    $arr[$i] = rand(1,100);
    }

print_r($arr);

?>
