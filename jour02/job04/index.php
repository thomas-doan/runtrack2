<?php

    for($i=0;$i<=100;$i++)
    {
        switch($i)
        {
            case ($i%15==0):
            echo "“FizzBuzz”"."</br>";
            break;
            case ($i%3==0):
            echo "“Fizz”"."</br>";
            break;
            case ($i%5==0):
            echo "“Buzz”"."</br>";
            break;
            default:
            echo $i."</br>";
            break;
        }
    }
    ?>