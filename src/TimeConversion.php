<?php

$midnight = '12:35:45AM';
$midday = '12:05:20PM';


function timeConversion($time) {
    // Split the time string into components
$components = explode(":", $time);

// Extract hour, minutes, seconds, and AM/PM
$hour = $components[0];    // '07'
$minutes = $components[1]; // '05'
$seconds = substr($components[2], 0, 2); // '45' (extracting only the first two characters)
$amPm = substr($components[2], 2); // 'PM' (extracting the last two characters)


  // Handle conversion based on AM/PM
  if ($amPm === "PM" && (int) $hour !== 12) {
    $hour += 12;  // Add 12 for hours in PM except 12PM
  } elseif ($amPm === "AM" && (int) $hour === 12) {
    $hour = 0;  // Convert 12AM to 00
  }


    // Format the output in 24-hour format with seconds
  return sprintf("%02d:%s:%s", $hour, $minutes, $seconds);
}


$RESULT = timeConversion($midnight);

echo $RESULT;