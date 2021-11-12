<?php
if (
    $bdd = mysqli_connect('localhost', 'root', 'azerty', 'jour08')
) {
    Mysqli_set_charset($bdd, 'utf8');
    // Si la connexion a réussi, rien ne se passe.
    //Requête: 
    $requete = mysqli_query($bdd,  "SELECT * FROM etudiants WHERE prenom LIKE 'T%'"); //excepter une requête
    $etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC); //récupérer ce que la requête renvoi "fetch"

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
    <title>exo 4</title>
</head>

<body>
    <tbody>

        <table>

            <thead>

                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Naissance</th>
                <th scope="col">Sexe</th>
                <th scope="col">Email</th>

            </thead>
            <tbody>

                <?php foreach ($etudiants as $etudiant) {  ?>
                    <tr>
                        <td> <?= $etudiant['nom']; ?> </td>
                        <td> <?= $etudiant['prenom']; ?> </td>
                        <td> <?= $etudiant['naissance']; ?> </td>
                        <td> <?= $etudiant['sexe']; ?> </td>
                        <td> <?= $etudiant['email']; ?> </td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>



    </tbody>
</body>

</html>