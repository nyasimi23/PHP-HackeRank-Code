<?php


function plusMinus($arr) {
    $positiveCount = 0;
   $negativeCount = 0;
   $zeroCount = 0;
 
   // Count positive, negative, and zero elements
   foreach ($arr as $num) {
     if ($num > 0) {
       $positiveCount++;
     } elseif ($num < 0) {
       $negativeCount++;
     } else {
       $zeroCount++;
     }
   }
 
   $totalCount = count($arr);
 
   // Handle division by zero for empty array or all zeros
   if ($totalCount === 0) {
     $positiveRatio = 0.0;
     $negativeRatio = 0.0;
     $zeroRatio = 1.0;
   } else {
     // Calculate ratios and round to six decimal places
     $positiveRatio = round($positiveCount / $totalCount, 6);
     $negativeRatio = round($negativeCount / $totalCount, 6);
     $zeroRatio = round($zeroCount / $totalCount, 6);
   }
 
   // Print ratios on separate lines
   echo $positiveRatio . PHP_EOL;
   echo $negativeRatio . PHP_EOL;
   echo $zeroRatio;
 }