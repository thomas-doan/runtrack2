<?php
 $str = "I'm sorry Dave I'm afraid I can't do that";
 $voyelles = [0 => "a", 1=> "e", 2=> "i", 3=> "o", 4=> "u", 5 => "y", 
            6 => "A", 7=> "E", 8=> "I", 9=> "O", 10=> "U", 11=> "Y" ];  

/* $voyelles = "aeiouyAEIOUY"; */

/*  for ($i = 0; isset($voyelles[$i]); $i++)
  {
     for ($j = 0; isset($str[$j]); $j++)
        {
         if ($str[$j] == $voyelles[$i])
         {
              echo $str[$j];
         }
        }
    } */

 
    for ($i = 0; isset($str[$i]); $i++)
    {
       for ($j = 0; isset($voyelles[$j]); $j++)
          {
           if ($voyelles[$j] == $str[$i])
           {
                echo $voyelles[$j];
           }
          }
      }
  
