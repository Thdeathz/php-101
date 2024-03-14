<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php 
  $x = "John";
  echo 'Hello $x';

  echo "<br>";

  echo strlen("Hello world!");

  echo "<br>";

  echo str_word_count("Hello world!");

  echo "<br>";
  
  echo strpos("Hello world!", "world");

  echo "<br>";

  // modify string
  $x = "Hello World!               ";
  echo strtoupper($x);
  echo strtolower($x);
  echo str_replace("World", "Dolly", $x);
  echo strrev($x);
  echo trim($x);
  // string to array
  $y = explode(" ", $x);
  print_r($y);

  echo "<br>";

  // concat
  $x = "Hello";
  $y = "World";
  $z = $x . " " . $y;
  echo $z;

  echo "<br>";

  // slicing
  $x = "Hello World!";
  echo substr($x, 6, 5);

  // slice to end
  echo substr($x, 6);

  // slice from end
  echo substr($x, -6, 3);

  // negative length
  echo substr($x, -6, -3);

  // escape characters
  $x = "We are the so-called \"Vikings\" from the north.";
  ?>

</body>

</html>