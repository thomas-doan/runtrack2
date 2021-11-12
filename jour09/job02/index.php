
<?php
if (
$bdd = mysqli_connect('localhost', 'root', 'azerty', 'jour08')) {
Mysqli_set_charset($bdd, 'utf8');
// Si la connexion a réussi, rien ne se passe.
//Requête: 
$requete = mysqli_query($bdd,  "SELECT nom, capacite FROM salles"); //excepter une requête
/* $index = mysqli_fetch_assoc($requete); //récupérer ce que la requête renvoi "fetch" */
$salles = mysqli_fetch_all($requete, MYSQLI_ASSOC); //récupérer ce que la requête renvoi "fetch"

}

else {
    echo "erreur";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>exo 2</title>
</head>

<body>
    <tbody>

        <table>

            <thead>
          
            <th scope="col">Nom</th>
            <th scope="col">Capacite</th>

            
            </thead>
            <tbody>

            <?php foreach ($salles as $salle) {  ?>
                    <tr>
                        <td> <?= $salle['nom']; ?> </td>
                        <td> <?= $salle['capacite']; ?> </td>
                    </tr>
                    <?php }; ?>
            </tbody>
        </table>



    </tbody>
</body>

</html>