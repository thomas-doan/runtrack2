<?php

$soleil = true;


echo bonjour($soleil);


function bonjour ($jour){

if( $jour == true){
return "Bonjour";

}

else
return "Bonsoir";

}