<?php

$h = $_POST['hauteur'];
$nbrLi = 0;
$nbrHa = 0;
$nbrEs = 0;
$l = $_POST['largeur'];





if (isset($_POST['hauteur'])) {


    $esp = $nbsp;

    $bsn = "\&nbsp";
    for ($i = 0; $i < $h; $i++) {
        for ($j = 0; $j <= $h - $i; $j++)

            echo "&nbsp;&nbsp;&nbsp";


        echo "/ ";

        for ($j = 1; $j <= $i + $i; $j++)

            echo "_ ";

        echo "$bsn" . "<BR>";

    }


$nbrHaBas = 1;
 while ($nbrHaBas < $h) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
        echo "|";
        echo nbrligne($l);
        echo "|";
        echo "</br>";
        $nbrHaBas++;
    }


}

 

if (isset($_POST['largeur'])) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
    echo "|";
    echo nbrligne($l);
    echo "|";
}



function nbrligne($nbr)
{
    $largini = 1;
    while ($largini <= $nbr - 2) {
        echo " _";
        $largini++;
    }
}


/* $row = 5;

for ($i = 1;  $i <= $row; $i++){

    for ($k = $i; $k < $row; $k++){
        echo " &nbsp; &nbsp";
    }

    for ($j = 1; $j <= (2 * $i -1); $j++){
        if ($j == 1 || $i == $row || $j == (2 * $i -1) ) {
            echo " *";
        } else {
            echo"&nbsp; &nbsp";
        }

    }

print "</br>";

} */





//Star Pyramid Size
/* $size = 5;
for($i=1;$i<=$size;$i++){
    for($j=1;$j<=$size-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
		echo "*&nbsp;&nbsp;";
    }
echo "<br />";
}
 */
?>

<form action="" method="post">
<label for="Largeur">Largeur = </label>
<input type="text" name="largeur" id="largeur"><br>
<label for="Hauteur">Hauteur = </label>
<input type="text" name="hauteur" id="hauteur"><br>
<input type="submit" value="Send">
</form>