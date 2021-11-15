<?php
if (
    $bdd = mysqli_connect('localhost', 'root', 'azerty', 'jour08')
) {
    Mysqli_set_charset($bdd, 'utf8');
    // Si la connexion a réussi, rien ne se passe.
    //Requête: 
    $requete = mysqli_query($bdd,  "SELECT * FROM etage");
    $requete1 = mysqli_query($bdd,  "SELECT *, SUM(superficie) as suptot FROM etage"); //excepter une requête
    $supinfo = mysqli_fetch_all($requete, MYSQLI_ASSOC); //récupérer ce que la requête renvoi "fetch"
    $suptotal = mysqli_fetch_all($requete1, MYSQLI_ASSOC); //récupérer ce que la requête renvoi "fetch"

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
    <title>exo 7</title>
</head>

<body>

    <div class="container">
        <div>
            <tbody>

                <table>

                    <thead>
                        <th scope="col">id</th>
                        <th scope="col">nom</th>
                        <th scope="col">numero</th>
                        <th scope="col">superficie</th>



                    </thead>
                    <tbody>

                        <?php foreach ($supinfo as $supo) {  ?>
                            <tr>
                                <td> <?= $supo['id']; ?> </td>
                                <td> <?= $supo['nom']; ?> </td>
                                <td> <?= $supo['numero']; ?> </td>
                                <td> <?= $supo['superficie']; ?> </td>

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
                        <th scope="col">superficie_totale</th>
                    </thead>
                    <tbody>

                        <?php foreach ($suptotal as $sup) {  ?>
                            <tr>
                                <td> <?= $sup['suptot']; ?> </td>

                            </tr>
                        <?php }; ?>
                    </tbody>

                </table>
            </tbody>

        </div>

    </div>




</body>

</html>