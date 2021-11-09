    <?php

$a = 10;
$b = "-";
$c = 2;

echo calcule($a,$b,$c);

function calcule($a, $b, $c){

if($b == "+") {
$resultat = $a + $c;

return $resultat;
} 

elseif($b == "-") {
    $resultat = $a - $c;
    
    return $resultat;
    } 

elseif($b == "*") {
    $resultat = $a * $c;
    
    return $resultat;
    } 


elseif($b == "/") {
    $resultat = $a / $c;
    
    return $resultat;
    } 


elseif($b == "%") {
    $resultat = $a % $c;
    
    return $resultat;
    } 

return "-1";
}

