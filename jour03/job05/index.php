<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

$tbl = [
    "voyelles" => ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'],
    "consonnes" => [
        'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z',
        'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z'
    ],
];


$voy = 0;

$cons = 0;
for ($j = 0; isset($str[$j]); $j++) {

    

    for ($i = 0; $tbl["voyelles"][$i]; $i++) {

        if ($str[$j] == $tbl["voyelles"][$i]) {

            $voy++;
        }
    }



    for ($i = 0; $tbl["consonnes"][$i]; $i++) {

        
            if ($str[$j] == $tbl["consonnes"][$i]) {

                $cons++;
            }
        
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau Voyelle/Consonne</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <table>
            <thead>
                <tr>
                    <th scope="col">Voyelle</th>
                    <th scope="col">Consonne</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"> <?php echo $voy ?>
                    </th>
                    <td>
                        <p>
                            <?php echo $cons; ?></br>
                        </p>

                    </td>

                </tr>





            </tbody>
        </table>
    </div>
</body>

</html>