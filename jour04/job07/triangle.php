<?php

$j = $_POST['hauteur'];
$nbrLi = 0;
$nbrHa = 0;
$nbrEs = 0;
$i = $_POST['largeur'];





///////-------------hauuuuut MAISON--------------------------////////////////
$largeurV = "2";
$largini = 1;
$m = 0;

/* if (isset($_POST['hauteur'])) {
    $hauteurT = $_POST['hauteur'];
    $nbrHa = 1;
    echo "/\";
} */






/*     echo "/"."</br>";

    echo nbrEsp(3*1,80)."/"; */



 if (isset($_POST['hauteur'])) {
    $bsn = "\&nbsp";

    $nbrHaHaut = 1;
    $nbrHaBas = 1;

    for ( $l = 0; $l < $j; $l++) { 
        for ( $e = 2; $e <= $j-$l; $e++) 
        echo '&nbsp';      
        echo "/"; 
        for ( $e = 1; $e <= $l+$l; $e++) echo "_"; 
        echo "$bsn";
        echo "</br>"; 
       } 



    ///------------BAS---------------------MAISOOON------------------------/////////////
    while ($nbrHaBas < $j) {
        echo "|";
        echo nbrligne($i);
        echo "|";
        echo "</br>";
        $nbrHaBas++;
    }
} 

if (isset($_POST['largeur'])) {
    $i = $_POST['largeur'];
    echo "|";
    echo nbrligne($i);
    echo "|";
}


//----------------------------fonction----------------------------//


function nbrligne($nbr)
{
    $largini = 1;
    while ($largini <= $nbr - 2) {
        echo "_";
        $largini++;
    }
}


function nbrEsp($nbr)
{
    $largini = 1;
    while ($largini <= $nbr - 2) {
        echo "&nbsp";
        $largini++;
    }   
}


/* echo "|".'&nbsp'.'&nbsp'."|".'</br>';
echo "|"."_"."|"; */

?>

<form action="" method="post">
    <label for="Largeur">Largeur = </label>
    <input type="text" name="largeur" id="largeur"><br>
    <label for="Hauteur">Hauteur = </label>
    <input type="text" name="hauteur" id="hauteur"><br>
    <input type="submit" value="Send">
</form>