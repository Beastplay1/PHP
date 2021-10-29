<?php 
// $str='I live in Yerevan since 2004546542310';

// preg_match(pattern($reg), subject($str),($matches))
// preg_match_all(pattern, subject, matches)
// preg_replace(pattern, replacement, subject)
 // preg_split(pattern, subject)


// $reg = '/^I live/';
// $reg = '/2004$/';
// $reg = '~l[^ oua]ve~';
// $reg = '~l[a-zA-Z]ve~';
// $reg = '~Y[a-z]{5}n~';
// $reg = '~Y[a-z]*n~';
 // $reg = '~Y[e/z]*r~';
// $reg = '~(Ye)(re)(van)~';
// $reg = '~ev(?=an)~';
// $reg = '~yerevan~i';
// $reg = '~yere.an~';

// $reg = '~\d{3}~';
// $str = '29/10/2021';
// $reg = '|^(\d{2})/(\d{2})/(\d{4})$|';


// $str = preg_replace($reg, "$2-$3-$1",$str);
// print_r($str);


$str = 'array(name=>"apple",$color=>"name",from=>"china","phone"=>"341-478")';


$reg = '~(?<=\(|,)[a-z]+(?==)~';
preg_match_all($reg, $str,$matches);
print_r($matches);










//^ - պետք է գտնվի սկզբում
//$ - պետք է գտնվի վերջում
// [] - 1 սիմվոլ
//[^ ] - ժխտում
//[-] - միջակայք
// {n} - կրկնողություն, {n,} - n և ավել,  {n.m} - n - ից m հատ
// + - կրկնող. 1 կամ շատ , * - 0 կամ  շատ
// . - ցանկ․ սիմվոլ բացի տողադարձից
// | - կամ
// \ - էկրան
// \d - [0-9], \D - [^0-9], \w - [a-zA-Z0-9], \W - [^a-zA-Z0-9] 
// \b - սահման
// (?= ...) - իրենից հետո պետք է լինի, (?= !...) - իրենից հետո չպետք է լինի, (?<= ․․․) - իրենից առաջ պետք է լինի, (?<! ․․․) - իրենից առաջ պետք է լինի
 ?>

