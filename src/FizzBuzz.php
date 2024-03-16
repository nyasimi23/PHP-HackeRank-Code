<?php

$n = 15;

function fizzBuzz($n) {
    // Loop through numbers from 1 to $n (inclusive)
    for ($i = 1; $i <= $n; $i++) {
      // Check for divisibility by 3 and 5
      if ($i % 15 === 0) {
        echo "FizzBuzz" . PHP_EOL;
      } elseif ($i % 3 === 0) {
        echo "Fizz" . PHP_EOL;
      } elseif ($i % 5 === 0) {
        echo "Buzz" . PHP_EOL;
      } else {
        echo $i . PHP_EOL;
      }
    }
  }

fizzBuzz($n);