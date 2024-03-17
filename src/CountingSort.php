<?php
function countOccurrences($arr) {
  $hash = [];  // Initialize an empty associative array

  // Iterate and update counts
  foreach ($arr as $value) {
    if (isset($hash[$value])) {
      $hash[$value]++;
    } else {
      $hash[$value] = 1;
    }
  }

  // Create output array based on counts
  $output = array_fill(0, max($arr) + 1, 0);  // Initialize with 0s
  foreach ($hash as $value => $count) {
    $output[$value] = $count;
  }

  return $output;
}

// Sample array
$myArray = [100, 25, 73, 1, 98, 73, 56, 84, 86, 57, 16, 83, 8, 25, 81, 56, 9, 53, 98, 63];

$counts = countOccurrences($myArray);



  