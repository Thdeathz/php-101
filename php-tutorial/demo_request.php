<?php
// $name = $_REQUEST['fname'];
// echo $name;

if($name = $_POST['fname']) {
  echo $name;
}

echo "<br>";

echo "Study " . $_GET['subject'] . " at " . $_GET['web'];