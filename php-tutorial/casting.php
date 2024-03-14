<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
    
    // Array casting
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (array) $a;
    $b = (array) $b;
    $c = (array) $c;
    $d = (array) $d;
    $e = (array) $e;

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);

    class Car {
      public $color;
      public $model;
      public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
      }
      public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
      }
    }

    $myCar = new Car("red", "Volvo");

    $myCar = (array) $myCar;
    var_dump($myCar);
    echo($myCar["color"]);

    echo("<br>Casting to object<br>");

    // cast to object
    // most data types converts into a object with one property, named "scalar", with the corresponding value.
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (object) $a;
    $b = (object) $b;
    $c = (object) $c;
    $d = (object) $d;
    $e = (object) $e;

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
  ?>

</body>

</html>