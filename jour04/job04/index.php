<pre>
<?php

/* foreach ($_POST as $key => $value) {
    echo 'argument est: ' . $key . "</br>";
    echo 'valeur est: ' . $value . "</br>";
} */


?>

</pre>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count POST</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <form action="index.php" method="POST">
        <div>
            <label for="nom">Nom</label>
            <br>
            <input type="text" id="nom" name="Nom">
        </div>

        <div>
            <label for="prenom">Prénom</label>
            <br>
            <input type="text" id="prénom" name="Prenom">
        </div>

        <div>
            <label for="age">Age</label>
            <br>
            <input type="text" id="age" name="Age">
        </div>
        <br>
        <button>Soumettre</button>

        <div class="container">
            <table>

            <?php 

                if (isset($_POST["Nom"]) && isset($_POST["Prenom"]) && isset($_POST["Age"])) {
                ?>

                <thead>
                    <tr>
                        <th scope='col'>Argument</th>
                        <th scope='col'>valeur</th>
                    </tr>
                </thead> 
                <tbody>
                    
                    <?php 
                            foreach ($_POST as $key => $value){
                                
                                echo " 
                                <tr>
                                <th scope='row'>$key</th>
                                <td>$value</td>
                                </tr>
                                ";
                            }
                        }
                        ?>
                        
                </tbody>
                
            </table>
        </div>

    </form>




</body>

</html>