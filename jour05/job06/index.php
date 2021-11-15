<?php

$str = "lolo le veau";
/* echo leetspeak($str); */


function leetspeak($str)
{

    for ($i = 0; isset($str[$i]); $i++) {

        switch ($str[$i]) {
            case "a":
            case "A":
                $str[$i] = "4";
                break;

            case "b":
            case "B":
                $str[$i] = "8";
                break;

            case "e":
            case "E":
                $str[$i] = "3";
                break;


            case "g":
            case "G":
                $str[$i] = "6";
                break;

            case "l":
            case "L":
                $str[$i] = "1";
                break;

            case "s":
            case "S":
                $str[$i] = "5";
                break;

            case "t":
            case "T":
                $str[$i] = "I";
                break;


            default;

                break;
        }
    }

    return ($str);
}

$test = leetspeak($str);

echo $test;
