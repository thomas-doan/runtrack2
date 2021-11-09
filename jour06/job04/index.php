<?php

if (!isset($_COOKIE['prenom'])) {
    $cookie = 1;
    setcookie('prenom', $cookie, time() + 3600 * 24, '/', '', false, false);
} else {
    $cookie = ++$_COOKIE['prenom'];
    setcookie("prenom", $cookie);
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>cookie</title>
</head>


<body>
    <div class="container">



        <form action="index.php" method="post">
            <input type="text" name="prenom" placeholder="votre prénom" />
            <input type="submit" name="connexion" value="connexion" />
            <input type="submit" name="deco" value="déconnexion" />
        </form>

        
    </div>

</body>

</html>