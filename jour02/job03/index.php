<?php

for ($i = 0; $i <= 100; $i++) {
    if ($i >= 0 && $i < 8 ) {
        echo "<i>". $i. "</i>"."</br>";
    }
    elseif ($i === 42){
        echo "La Plateforme_"."</br>";
    }
     

    elseif ($i >= 25 && $i < 51 ){
        echo "<u>".$i."</u>"."</br>";
    }
    
     else {
        echo $i . "</br>";
    } 
}
