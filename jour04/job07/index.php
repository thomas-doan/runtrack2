<?php
 $i = $_POST['largeur'];
$j = $_POST['hauteur'];
$nbrLi=0;
$nbrHa=0;
$nbrEs=0;



  while ($nbrHa != $i){
    echo "|";
    
    echo "|&nbsp.&nbsp.&nbsp.&nbsp| <br>";
    $nbrHa++;
}  
/*    while ($nbrEs != $i){
    echo ' ';
    $nbrEs++;
}     */
while ($nbrLi != $i){
    echo ' _ ';
    $nbrLi++;
}
 
?>

<form action="" method="post">
    <label for="Largeur">Largeur = </label>
    <input type="text" name="largeur" id="largeur"><br>
    <label for="Hauteur">Hauteur = </label>
    <input type="text" name="hauteur" id="hauteur"><br>
    <input type="submit" value="Send">
</form>

