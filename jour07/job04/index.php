<?php
if (isset($_POST["deco"])) {
    unset($_COOKIE['prenom']);
    setcookie('prenom', $prenom);
}


if (!isset($_COOKIE['prenom'])) {
    $prenom = $_POST['prenom'];
    setcookie('prenom', $prenom, time() + 3600 * 24, '/', '', false, false);
?>
        <form action="index.php" method="post">
            <input type="text" name="prenom" placeholder="votre prénom" />
            <input type="submit" name="connexion" value="connexion" />
            </form>
 <?php           
} 
else
 {

 echo "bonjour ".$_COOKIE['prenom'];
 ?>
 <form action="index.php" method="post">
            <input type="submit" name="deco" value="déconnexion" />
        </form> 

<?php

} 


?>




   

  <!--       <form action="index.php" method="post">
            <input type="text" name="prenom" placeholder="votre prénom" />
            <input type="submit" name="connexion" value="connexion" />
            </form>
            <form action="index.php" method="post">
            <input type="submit" name="deco" value="déconnexion" />
        </form> -->
