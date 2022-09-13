<?php


// declare(strict_types=1);

// function FizzBuz(int $number):void {

// for($i=0;$i<$number;$i++){

//     if($i % 3 ==0){
//         echo'Fizz';
//     }
//     elseif($i % 5 == 0){
//         echo'Buzz';
//     }
//     elseif($i % 15 == 0){
//         echo'FizzBuzz';
//     }
//     else{
//         echo $i;
//     }
//     echo PHP_EOL;
// }

// }


// FizzBuz(100);


declare(strict_types=1);

function FIZZBUZZ(int $n):void{

    for($i=0;$i<$n;$i++){
        if($i % 3==0){
            echo'Fizz';
        }
        elseif($i % 5==0){
            echo'Buzz';
        }
        elseif($i % 15 ==0){
            echo'FIZZBUZZ';
        }
        else{
            echo $i;
        }
        echo PHP_EOL;
    }
}

FIZZBUZZ(60);