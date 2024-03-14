<?php 
// strict mode in php
declare(strict_types=1); // strict requirement

// function addNumbers(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumbers(5, "5 days"); // should throw an error in strict mode

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  
  function familyName($fname, $year = 2000) {
    echo "$fname Refsnes. Born in $year <br>";
  }
  
  familyName("Hege", "1975");
  familyName("Stale", "1978");
  familyName("Kai Jim");

  function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;

  function addNumbers(float $a, float $b) : float {
    return $a + $b;
  }
  echo addNumbers(1.2, 5.2);

  ?>



</body>

</html>