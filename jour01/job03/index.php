<?php
$bool = true;
$bool2 = false;
$entier = 69;
$chaineDeC = "Cookie + brownie = BROOKIE";
$virguleF = 1.234;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau primitif</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <table>
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Valeur</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Booleen</th>
                    <td>
                        <p>
                            $bool = </br>
                        </p>

                        <p>
                            $bool2 = </br>
                        </p>
                    </td>

                    <td>
                        <p>
                            <?php
                            echo "true affiche 1 " . "$bool1 ";
                            ?>

                        </p>
                        <p>
                            <?php
                            if ($bool2 === false) {
                                echo "false affiche " . "0";
                            }
                            ?>
                        </p>
                    </td>


                </tr>
                <tr>
                    <th scope="row">Entier</th>
                    <td>
                        <p>$entier = </p>
                    </td>
                    <td><?php

                        echo $entier;
                        ?>
                    </td>
                </tr>

                <tr>
                    <th scope="row">chaîne de caractères</th>
                    <td>
                        <p>
                            $chaineDeC =
                        </p>
                    </td>
                    <td><?php

                        echo $chaineDeC;
                        ?>
                    </td>
                </tr>

                <tr>
                    <th scope="row">nombre à virgule flottante</th>
                    <td>
                        <p>
                            $virguleF =
                        </p>
                    </td>
                    <td>
                        <?php

                        echo $virguleF;
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>