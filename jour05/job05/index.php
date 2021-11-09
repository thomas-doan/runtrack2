<?php
$str ="thomaaas";
$char = "a";


echo occurences($str, $char);

function occurences($str, $char){

$nbr = 0;

for ($j = 0; isset($str[$j]); $j++) {

    

    for ($i = 0; $char[$i]; $i++) {

        if ($str[$j] == $char[$i]) {

            $nbr++;

            
        }
       

    }
 
}
return "$nbr";


}