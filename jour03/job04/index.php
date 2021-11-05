<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

//bouche While dans une fct pour count tbl//
/* function Wlen($str) {

$i = 0;
while ( isset($str[$i]) ){
$i++;
}
return $i;


}


echo Wlen($str);  */



function len($str)
{

    for ($i = 0; isset($str[$i]); $i++);

    return $i;
}

echo len($str);
