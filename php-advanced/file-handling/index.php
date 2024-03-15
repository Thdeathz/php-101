<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  echo readfile("../public/webdictionary.txt");
  
  echo "<br>";
  ?>

  <?php
  ini_set('display_errors',1); // for the development PC only
  error_reporting(E_ALL); // ALWAYS
  $myfile = fopen("../public/newfile.txt", "w+") or die("Unable to open file!");
  $txt = "Thdeathz\n";
  fwrite($myfile, $txt);
  $txt = "xxxx\n";
  fwrite($myfile, $txt);
  echo readfile("../public/newfile.txt");
  fclose($myfile);
  ?>

</body>

</html>