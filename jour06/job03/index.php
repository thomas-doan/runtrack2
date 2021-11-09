<?php

session_start();

if (isset($_POST["reset"])) 
{
    unset($_SESSION['prenom']);
    session_destroy();
}

 if (!isset($_SESSION['prenom'])) {
    $_SESSION['prenom'] = [];
}

    $x = 0;
    foreach ($_SESSION['prenom'] as $key => $value) {
        $x++;
    }

if (isset($_SESSION['prenom'])) {
    $_SESSION['prenom'][$x] = $_POST['prenom'];
}


foreach ($_SESSION['prenom'] as $singleP) {
    echo $singleP;

    echo '<pre>';
}  ;







/* if (!isset($_SESSION['prenom']))
{
    $_SESSION['prenom'] = [];
}
    $x = 0;
    foreach ($_SESSION['prenom'] as $key => $value){
        $x++;
    }

    if (isset($_SESSION['prenom'])){
        $_SESSION['prenom'][$x] = $_POST['prenom'];
    }
echo '<pre>';
print_r ($_SESSION['prenom']) ; */


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
            <input type="type" name="prenom" placeholder="votre prénom" />
            <input type="submit" name="submit" value="submit" />
        </form>

        <form action="index.php" method="post">
            <input type="submit" name="reset" value="reset" />
        </form>
        
    </div>

</body>

</html>