<?php
if (
    $bdd = mysqli_connect('localhost', 'root', 'azerty', 'jour08')
) {
    Mysqli_set_charset($bdd, 'utf8');
    // Si la connexion a réussi, rien ne se passe.
    //Requête: 
    $requete = mysqli_query($bdd,  "SELECT * FROM etudiants");
    $requete1 = mysqli_query($bdd,  "SELECT COUNT(*) AS nb FROM etudiants;"); //excepter une requête
    $supinfo = mysqli_fetch_all($requete, MYSQLI_ASSOC); //récupérer ce que la requête renvoi "fetch"
    $etudiants = mysqli_fetch_all($requete1, MYSQLI_ASSOC); //récupérer ce que la requête renvoi "fetch"

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
    <title>exo 6</title>
</head>

<body>
    <div class="container">
        <div>
            <tbody>

                <table>

                    <thead>

                        <th scope="col">id</th>
                        <th scope="col">prenom</th>
                        <th scope="col">nom</th>
                        <th scope="col">naissance</th>
                        <th scope="col">sexe</th>
                        <th scope="col">email</th>

                    </thead>
                    <tbody>

                        <?php foreach ($supinfo as $sup) {  ?>
                            <tr>
                                <td> <?= $sup['id']; ?> </td>
                                <td> <?= $sup['prenom']; ?> </td>
                                <td> <?= $sup['nom']; ?> </td>
                                <td> <?= $sup['naissance']; ?> </td>
                                <td> <?= $sup['sexe']; ?> </td>
                                <td> <?= $sup['email']; ?> </td>


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

                        <th scope="col">nb_etudiants</th>

                    </thead>
                    <tbody>

                        <?php foreach ($etudiants as $etudiant) {  ?>
                            <tr>
                                <td> <?= $etudiant['nb']; ?> </td>


                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>



            </tbody>
        </div>
    </div>
</body>

</html>