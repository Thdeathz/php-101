<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  function my_callback($item) {
    return strlen($item);
  }

  $strings = ["apple", "orange", "banana", "coconut", "super_long_string_length"];
  $lengths = array_map("my_callback", $strings);

  var_dump($lengths);

  print_r($lengths);

  echo "<br>";

  // array map return a copy of given array

  $strings = ["apple", "orange", "banana", "coconut"];
  $lengths = array_map( function($item) { return strlen($item); } , $strings);
  print_r($lengths);
  
  ?>

</body>

</html>
