<?php

$array = [1,3,5,7];

function miniMaxSum($arr) {
    
    // Sort the array in ascending order
    sort($arr);
  
    // Minimum sum: Sum all elements except the last
    $minSum = array_sum(array_slice($arr, 0, count($arr) - 1));
  
    // Maximum sum: Sum all elements except the first
    $maxSum = array_sum(array_slice($arr, 1));
  
    // Print minimum and maximum sum on a single line
    echo "Min: $minSum  Max: $maxSum ";
  }
  
miniMaxSum($array);