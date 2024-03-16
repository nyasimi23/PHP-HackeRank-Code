<?php


function findMedian($arr) {
    $count = count($arr);
  
    // Handle empty or single-element arrays
    if ($count === 0) {
      return null;  // Or throw an exception if empty array is invalid
    } elseif ($count === 1) {
      return $arr[0];
    }
  
    // Sort the array
    sort($arr);
  
    // Calculate middle index(es)
    $midpointIndex = (int) floor($count / 2);
  
    // Even number of elements: average of two middle elements
    if ($count % 2 === 0) {
      return ($arr[$midpointIndex - 1] + $arr[$midpointIndex]) / 2;
    } else {
      // Odd number of elements: return single middle element
      return $arr[$midpointIndex];
    }
  }
  
  // Sample array
  $myArray = [5, 2, 1, 3, 4];
  
  $median = findMedian($myArray);
  
  echo "Median: " . $median . PHP_EOL;