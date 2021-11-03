<?php
 $str = "aabb";
/*  $voyelles = [0 => "a", 1=> "e", 2=> "i", 3=> "o", 4=> "u", 5=> "y" ]; 
 */
$tbl = [
    "voyelles" => ['a', 'e', 'i', 'o', 'u', 'y'],
    /*  "voyelles" => ['1', '2', '3', '4', '5'], */
    "consonnes" => ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'],
];

/* echo "{$tbl["voyelles"][1]}";  */

function Wlen($str) {

	$i = 0;
	while ( isset($str[$i]) ){
	$i++;
	}
	return $i;
	
	
	}
	


 for ($i = 0; isset($tbl["voyelles"][$i]); $i++)
  {
     for ($j = 0; isset($str[$j]); $j++)
        {
         if ($str[$j] == $tbl["voyelles"][$i])
         {
             echo $str[$j]."</br>";
            echo Wlen($str);
	       

         }

         elseif ($str[$j] == $tbl["consonnes"][$i])
         {
             echo $str[$j]."</br>";
             
         }


        }
    }

 


/* $str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = "aeiouyAEIOUY";

$tblT = [0 => $str];
$tblV = [0 => $voyelles]; 

/* $tblT = [0 => "ta", 1 => "ti", 2 => "ko"];
$tblV = [0 => "a", 1 => "i"];
          var_dump($tblV);
        var_dump($tblT);  
for ($j = 0; isset($tblT[$j]); $j++)
  {
     for ($i = 0; isset($tblV[$i]); $i++)
        {

         if ($tblV[$i] === $tblT[$j])
         {
             echo $tblT[$j]."</br>";
         }
        }
    } */

