<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pair ou Impaire</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div id="container">
        <!-- zone de connexion -->

        <form action="index.php" method="GET">
            <h1>Pair ou Impaire</h1>

            <label><b>Ton chiffre ?</b></label>
            <input type="int" placeholder="Entrer un chiffre" name="chiffre" required>

           

            <input type="submit" id='submit'>
            <?php
            if (isset($_GET["chiffre"]) ) {
                if ($_GET["chiffre"] % 2 == 1) {
                    echo "Nombre impair" . "</br>";
                } else {
                    echo "Nombre pair" . "</br>";
                }
            } else {
                false;
            }

            ?>
        </form>
    </div>



</body>

</html>