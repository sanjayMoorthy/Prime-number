<?php


function primeNumber($num){
    if ($num > 0){
        for($i=2; $i <= $num -1; $i++){
            if($num % $i == 0){
                $sumvalue = true;
            }
        }

        if($sumvalue = false){
            echo "$num is not a prime number";
        }
        else{
            echo "$num is a prime number";
        }
    }else{
        echo "please enter a value as greater then 0";
    }
}   
primeNumber(0);