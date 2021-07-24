<?php

    class MathCalculator {

       static function fibonacci($n) {
           echo "Fibonacci Series up to {$n} \n";
       }
       static function factorial($n) {
           echo "Factorial Series up to {$n} \n";
       }
    }

  //  $mathc = (new MathCalculator())->fibonacci($n);

//    MathCalculator::fibonacci(7);
//    MathCalculator::factorial(13);

    $math = new MathCalculator();
    $math->fibonacci(8);

    echo $math;
