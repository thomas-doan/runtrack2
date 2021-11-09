<?php

//version courte//
/* $str = "Certaines choses changent, et d'autres
ne changeront jamais.";

$i = 1;
while (isset($str[$i])) {

echo "{$str[$i]}";


    $i++;
   
}

 echo "{$str[0]}"; */




 //version longue//
 $str = "Certaines choses changent, et d'autres";
 $i = 0;
$j = 1;
while(
    isset($str[$j])
){

$temp = $str[$i];

$str[$i] = $str[$j];

$str[$j] = $temp;

++$j;
echo $str[$i];

}

 echo $str[$i+1];   