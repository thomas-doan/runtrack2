<?php
if (
    $bdd = mysqli_connect('localhost', 'root', 'azerty', 'jour08')
) {
    Mysqli_set_charset($bdd, 'utf8');
    // Si la connexion a réussi, rien ne se passe.
    //Requête: 
    $requete = mysqli_query($bdd,  "SELECT salles.nom as 'Salle_nom', id_etage, capacite,  etage.nom as 'Etage_nom', numero, superficie  FROM etage INNER JOIN salles on etage.id = salles.id_etage;"); //excepter une requête
    $sallesETetages = mysqli_fetch_all($requete, MYSQLI_ASSOC); //récupérer ce que la requête renvoi "fetch"

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
    <title>exo 13</title>
</head>

<body>
   
    <tbody>

        <table>

            <thead>

                <th scope="col">nom des salles</th>
                <th scope="col">id_etage</th>
                <th scope="col">capacite</th>
                <th scope="col">nom de leur etage </th>
                <th scope="col">numero</th>
                <th scope="col">superficie</th>


            </thead>
            <tbody>

                <?php foreach ($sallesETetages as $st) {  ?>
                    <tr>
                        <td> <?= $st['Salle_nom']; ?> </td>
                        <td> <?= $st['id_etage']; ?> </td>
                        <td> <?= $st['capacite']; ?> </td>
                        <td> <?= $st['Etage_nom']; ?> </td>
                        <td> <?= $st['numero']; ?> </td>
                        <td> <?= $st['superficie']; ?> </td>
                       
                    </tr>
                <?php }; ?>
            </tbody>
        </table>



    </tbody>
</body>

</html>