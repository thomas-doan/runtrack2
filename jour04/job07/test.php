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
    echo nbrEsp($i) . "/" . "$bsn" . "</br>";
   /*  $ligneH=$_POST['largeur']; */
   $ligneH = ($i-2)/2;
    $espaceDec =$i-2;

      while ($nbrHaHaut < $j){
         echo nbrEsp($espaceDec); 
         echo "/";
          echo nbrligneHaut($ligneH);
          echo "$bsn"; 
            echo"</br>";
        $nbrHaHaut++;
        $ligneH = $ligneH +2;
        $espaceDec = $espaceDec - 2 ;
        
    }  

  

    ///------------BAS---------------------MAISOOON------------------------/////////////
    while ($nbrHaBas < $j) {
        echo "|";
        echo nbrEsp($i * 1.80);
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

function nbrligneHaut($nbr)
{
    $largini = 1;
    while ($largini <= $nbr-2) {
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