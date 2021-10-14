<?php 


$a = "Nullam at purus vel neque aliquam sollicitudin a eu mi. Duis ac sodales ante. Nullam pulvinar, felis id gravida pellentesque, turpis nunc tristique mauris, nec lacinia mauris urna gravida leo. Nunc quam erat, dictum at accumsan a, consequat id sapien. Etiam volutpat et tortor non efficitur. Suspendisse auctor est metus, at aliquam tellus placerat vel. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam semper, erat porta luctus mattis, justo odio tincidunt justo, nec tristique tellus tortor id ligula. Nulla quis risus est. Morbi interdum lacus sed hendrerit eleifend. Mauris dignissim augue a pretium pulvinar. In ante nunc, porta eget sollicitudin eu, semper at nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus vitae lectus eu nulla iaculis mattis vitae ac tortor.";


echo "<pre>";
$c = str_replace([",", '.'], '', $a);
$arr = [];
foreach (explode(" ", $c) as $word) {
	$arr[substr(strtoupper($word), 0,1)][] = $word;
}


ksort($arr);
print_r($arr);


 ?>