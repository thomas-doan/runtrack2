<?php
if (isset($_POST['str'])) {
    $str = $_POST['str'];

    echo gras($str);
}






function gras($str)
{

    $mini = [
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u",
        "v", "w", "x", "y", "z", " ",
    ];


    $maju = [
        "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U",
        "V", "W", "X", "Y", "Z", " "
    ];


    for ($i = 0; isset($str[$i]); $i++) {

        for ($k = 0; $maju[$k]; $k++) {

            if ($str[$i] == $maju[$k] && $str[0] == $str[$i]) {
                echo "<b>";
            } elseif ($str[$i] == $maju[$k]  && $str[$i - 1] == $mini[26]) {

                echo "<b>" . "$str[$i]";
            }



            if ($str[$i] == $maju[$k]  && $str[$i - 1] !== $mini[26]) {

                echo "$str[$i]";
            } elseif ($str[$i] == $mini[26]) {
                echo "</b>";
            }
        }

        for ($j = 0; isset($mini[$j]); $j++) {

            if ($str[$i] == $mini[$j]) {
                echo $str[$i];
            }
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
    <title>Document</title>
</head>

<body>




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


            <form action="" method="post">
                <label for="str"> </label>
                <input type="text" name="str" id="str" placeholder="Ton texte"><br>
                <FORM>
                    <SELECT name="fonction" id="fonction" size="1">
                        <option value=""> choisisser la fonction </option>
                        <OPTION value="gras">gras</option>
                        <OPTION value="cesar">cesar</option>
                        <OPTION value="plateforme">plateforme</option>
                    </SELECT>
                    <br>
                    <input type="submit" value="Send">
                </form>


                </tbody>
                </table>
        </div>
    </body>