<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php 
  $str = "Visit Microsoft!";
  $pattern = "/microsoft/i";
  echo preg_replace($pattern, "W3Schools", $str);
  ?>

</body>

</html>