<?php
/* $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
for($i = 0; isset($str[$i]); $i= $i + 2)
{
	echo "{$str[$i]}<br />";
} */

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
/* 
 function len($str) {

for($i = 0; isset($str[$i]); $i++) 
{
echo $i;
}

return $i;

}

echo len($str);  */


 function Wlen($str) {

	$i = 0;
	while ( isset($str[$i]) ){
	$i++;
	}
	return $i;
	
	
	}
	
	echo Wlen($str); 