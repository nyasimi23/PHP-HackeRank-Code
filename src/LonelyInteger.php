
<?php

function lonelyinteger($arr) {
  // Initialize an empty hash table (associative array)
  $hash = [];

  // Iterate through the input array
  foreach ($arr as $value) {
    // Check if the value exists in the hash table
    if (isset($hash[$value])) {
      // If it exists, increment its count (meaning it's a duplicate)
      $hash[$value]++;
    } else {
      // If it doesn't exist, add it to the hash table with a count of 1
      $hash[$value] = 1;
    }
  }

  // Find the key (unique element) with a count of 1
  foreach ($hash as $key => $count) {
    if ($count === 1) {
      return $key;
    }
  }

  // If no unique element is found, return null (or throw an exception if that's expected behavior)
  return null;
}

// Sample array
$myArray = [1, 2, 3, 4, 3, 2, 1];

$uniqueElement = lonelyinteger($myArray);

echo "Unique element: " . $uniqueElement . PHP_EOL;
