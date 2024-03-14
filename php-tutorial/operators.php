<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php 
  $x = 100;
  $y = 5;

  // arithmetic operators
  echo $x + $y . "<br>";
  echo $x - $y . "<br>";
  echo $x * $y . "<br>";
  echo $x / $y . "<br>";
  echo $x % $y . "<br>";
  echo $x ** $y . "<br>";

  // assignment operators
  $x = $y;
  $x += $y;
  $x -= $y;
  $x *= $y;
  $x /= $y;
  $x %= $y;
  
  // comparison operators
  var_dump($x == $y);
  var_dump($x === $y);
  var_dump($x != $y);
  var_dump($x <> $y);
  var_dump($x !== $y);
  var_dump($x > $y);
  var_dump($x <=> $y);

  echo "<br>";

  // logical operators
  var_dump($x and $y);
  var_dump($x or $y);
  var_dump($x xor $y);
  var_dump($x && $y);
  var_dump($x || $y);

  echo "<br>";

  // array operators
  $x = array("a" => "red", "b" => "green");  
  $y = array("c" => "blue", "d" => "yellow");  

  var_dump($x + $y);
  var_dump($x == $y);
  var_dump($x === $y); // requires both has same order
  var_dump($x != $y);
  var_dump($x <> $y);

  ?>

</body>

</html>