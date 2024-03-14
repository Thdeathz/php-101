<?php 
namespace CustomNamespace;

echo __NAMESPACE__ . "<br>";

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

  echo __LINE__ . "<br>";

  echo __DIR__ . "<br>";

  echo __FILE__ . "<br>";

  trait traitMessage {
    public function msg1() {
      echo __TRAIT__ . "<br>"; 
    }
  }
  
  class MyClass
  {
    use traitMessage;

    public $var = __CLASS__;
  
    public function __construct()
    {
      echo __METHOD__ . "<br>";

      echo __CLASS__ . "<br>";

      echo __FUNCTION__ . "<br>";

      echo $this->msg1();
    }
  }

  $obj = new MyClass();


  ?>

</body>

</html>