<?php
$str = "aaeeii";

$tbl = [
    "voyelles" => ['a', 'e', 'i', 'o', 'u', 'y'],
    /*  "voyelles" => ['1', '2', '3', '4', '5'], */
    "consonnes" => ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'],
];


$occuV = [1 => $str];
$occuC = [];


/*      echo "{$tbl["voyelles"][1]}";  */

/*   foreach ($tbl["voyelles"] as $value) 
    {
        for ( $i = 0; isset($value[$i]); $i++) 
        {
            
            if ($value[$i] == $str[$i]) 
            {
                 echo "{$str[$i]}";
            }
    
    } */

for ($i = 0; isset($str[$i]); $i++) {

    if ($str[$i] == $tbl["voyelles"][1]) {
        /* var_dump("{$tr[$i]}"); */
        echo "yes";
    } else {
        echo "non";
    }
}
