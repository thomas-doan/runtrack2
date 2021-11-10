<?php

session_start();


if (isset($_SESSION['nbvisites']) && $_SESSION['nbvisites'] >= 1) {
    $nbvisites = $_SESSION['nbvisites'];

    $nbvisites++;
    $_SESSION['nbvisites'] = $nbvisites;
} else {
    $nbvisites = 1;
    $_SESSION['nbvisites'] = $nbvisites;
}



if (isset($_POST["reset"])) {
    unset($_SESSION['nbvisites']);
    session_destroy();
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <p>
            <?php echo $_SESSION['nbvisites'];  ?>
        </p>
        <form action="index.php" method="post">
            <input type="submit" name="reset" value="reset" />
        </form>
    </div>
</body>

</html>