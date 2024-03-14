<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  
  $a = 5;
  $b = 5.34;
  $c = "25";

  var_dump($a);
  var_dump($b);
  var_dump($c);

  $x = 5985;
  var_dump(is_int($x));

  $x = 59.85;
  var_dump(is_int($x));

  $x = 5985;
  var_dump(is_numeric($x));

  $x = "5985";
  var_dump(is_numeric($x));
  $x = "59.85" + 100;
  var_dump(is_numeric($x));

  $x = "Hello";
  var_dump(is_numeric($x));

  ?>

</body>

</html>