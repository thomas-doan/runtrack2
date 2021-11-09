<?php


$str = "wxyz";

/* echo gras($str)."</br>";

$test ="A";
 */
/* echo ord($test); */

echo cesar($str);


function cesar($str)
{


/*           $mini = [
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u",
        "v", "w", "x", "y", "z",
    ];   */



      $mini = "abcdefghijklmnopqrstuvwxyz"; 

     /* $mini = "zyxwvutsrqponmlkjihgfedcba"; */
  

    /*  $maju = [
        "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U",
        "V", "W", "X", "Y", "Z", " "
    ]; */


    for ($i = 0; isset($str[$i]); $i++) {


        for ($k = 0; $mini[$k]; ++$k) {
         

            if ($str[$i] == $mini[$k]) {
                
                

                  if ($mini[$k + 2 ] <= $mini[25]) {

                  echo $mini[$k +2 ];
                }
                  
                elseif (isset($mini[$k+6]) > 26) {
               
                    echo "testff";
                } 
            }
        }
    }
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

            if ($str[$i] == $maju[$k] && $str[0] == $str[$i])
            /*    if ($str[0] == $maju[$k])  */ {

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
<!-- <form action="" method="post">
    <label for="str">str </label>
    <input type="text" name="str" id="str"><br>
    <FORM>
<SELECT name="fonction" id="fonction" size="1">
<option value=""> choisisser la fonction </option>
<OPTION value="gras">gras</option>
<OPTION value="cesar">cesar</option>
<OPTION value="plateforme">plateforme</option>
</SELECT>
<br>

    <input type="submit" value="Send">
</form> -->