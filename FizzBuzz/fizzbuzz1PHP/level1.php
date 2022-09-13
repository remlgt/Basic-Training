<?php 

declare(strict_types=1);

function fizzbuzz(int $number):void{

    for($i=0; $i<$number; $i++){
        if($i % 15 == 0){
            echo 'FizzBuzz';
        }
        elseif($i % 3 == 0){
            echo 'Fizz';
        }
        elseif($i % 5 == 0){
            echo'buzz';
        }
        else{
            echo $i;
        }

        echo PHP_EOL;
    }
}


fizzbuzz(50);

?>