<?php

if (!isset($_COOKIE['nbvisites'])) {
    $cookie = 1;
    setcookie('nbvisites', $cookie, time() + 3600 * 24, '/', '', false, false);
} else {
    $cookie = ++$_COOKIE['nbvisites'];
    setcookie("nbvisites", $cookie);
}





if (isset($_POST["reset"])) {
    unset($_COOKIE['nbvisites']);
    setcookie('nbvisites');
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
      
        <p> <?php echo $_COOKIE['nbvisites'] ?> </p> 
        
        <form action="index.php" method="post">
            <input type="submit" name="reset" value="reset" />
        </form>
    </div>

</body>

</html>