<?php
if (
    $bdd = mysqli_connect('localhost', 'root', 'azerty', 'jour08')
) {
    Mysqli_set_charset($bdd, 'utf8');
    // Si la connexion a réussi, rien ne se passe.
    //Requête: 
    $requete = mysqli_query($bdd,  "SELECT * FROM salles"); //excepter une requête
    $requete1 = mysqli_query($bdd,  "SELECT * ,AVG(capacite) as capM FROM salles"); //excepter une requête
    $supinfo = mysqli_fetch_all($requete, MYSQLI_ASSOC); //récupérer ce que la requête renvoi "fetch"
    $capaciteMoy = mysqli_fetch_all($requete1, MYSQLI_ASSOC); //récupérer ce que la requête renvoi "fetch"

} else {
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
    <title>exo 11</title>
</head>

<body>


    <div class="container">
        <div>
            <tbody>

                <table>

                    <thead>
                        <th scope="col">Nom</th>
                        <th scope="col">Capacité</th>
                        <th scope="col">Id etage</th>
                        <th scope="col">Id</th>
           


                    </thead>
                    <tbody>

                        <?php foreach ($supinfo as $sup) {  ?>
                            <tr>
                                <td> <?= $sup['nom']; ?> </td>
                                <td> <?= $sup['capacite']; ?> </td>
                                <td> <?= $sup['id_etage']; ?> </td>
                                <td> <?= $sup['id']; ?> </td>
                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>



            </tbody>

        </div>

        <div>
            <tbody>

                <table>

                    <thead>
    
                        <th scope="col">Capacité moyenne</th>


                    </thead>
                    <tbody>

                        <?php foreach ($capaciteMoy as $moy) {  ?>
                            <tr>
                                <td> <?= $moy['capM']; ?> </td>

                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>



            </tbody>

        </div>

    </div>
</body>

</html>