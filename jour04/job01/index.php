
<pre>
<?php

$i = 0;
foreach($_GET as $key) {
    $i++;
}
 echo $i;

?>
</pre>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count GET</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <form action="index.php" method="GET">
        <div>
            <label for="nom">Nom</label>
            <br>
            <input type="text" id="nom" name="nom">
        </div>

                   <div>
            <label for="prenom">Prénom</label>
            <br>
            <input type="text" id="prénom" name="prenom">
        </div>

        <div>
            <label for="age">Age</label>
            <br>
            <input type="text" id="age" name="age">
        </div>  
        <br>
        <button>Soumettre</button>

    </form>




</body>

</html>