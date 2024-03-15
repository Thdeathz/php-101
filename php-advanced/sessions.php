<?php
// Start the session
session_start();
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
  // default save path /var/lib/php/sessions
  // file name is sess_ + PHPSESSID

  // Set session variables
  $_SESSION["favcolor"] = "green";
  $_SESSION["favanimal"] = "cat";
  $_SESSION["new"] = "something";
  echo "Session variables are set.";
  ?>

</body>

</html>
