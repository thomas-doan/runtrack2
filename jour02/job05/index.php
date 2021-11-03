<?php

function nombrePremier($nbr) {

    for ($i = 2; $i < $nbr; $i++) {
        if ($nbr % $i == 0) {
            return FALSE; 
        }
    }
    return TRUE;
}
 
for ($i = 2; $i < 1000; $i++) {
    if (nombrePremier($i)) {
        echo $i."</br>";
    }
}