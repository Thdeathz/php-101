<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php 
  
  echo "While Loop <br>";

  $i = 0;
  while ($i < 6) {
    $i++;
    if ($i == 3) continue;
    echo $i;
  }

  echo "<br>Do While Loop <br>";

  $i = 8;
  do {
    echo $i;
    $i++;
  } while ($i < 6);

  echo "<br>For Loop <br>";

  for ($x = 0; $x <= 10; $x++) {
    if ($i == 3) break;
    echo "The number is: $x <br>";
  }

  echo "<br>Foreach Loop <br>";

  $colors = array("red", "green", "blue", "yellow");

  foreach ($colors as $x) {
    echo "$x <br>";
  }

  ?>

</body>

</html>