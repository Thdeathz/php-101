<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php 
  $x = 5;
  var_dump($x);

  $cars = array("Volvo","BMW","Toyota");
  var_dump($cars);

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
  var_dump($myCar);

  // null variable
  $x = null;
  var_dump($x);

  // change type
  $x = "Hello";
  var_dump($x);
  ?>

</body>

</html>