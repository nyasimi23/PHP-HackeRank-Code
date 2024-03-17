<?php

function diagonalDifference($arr) {
    $n = count($arr); // Get the size of the square matrix
  
    // Initialize variables to store diagonal sums
    $leftDiagonalSum = 0;
    $rightDiagonalSum = 0;
  
    // Iterate through the matrix
    for ($i = 0; $i < $n; $i++) {
      // Access elements of the left diagonal (i, i)
      $leftDiagonalSum += $arr[$i][$i];
  
      // Access elements of the right diagonal (i, n-1-i)
      $rightDiagonalSum += $arr[$i][$n - 1 - $i];
    }
  
    // Return the absolute difference between diagonal sums
    return abs($leftDiagonalSum - $rightDiagonalSum);
  }
  
  // Sample square matrix
  $arr = [
    [1, 2, 3],
    [4, 5, 6],
    [9, 8, 9],
  ];
  
  $difference = diagonalDifference($arr);
  
  echo "Absolute difference between diagonal sums: " . $difference . PHP_EOL;
  