<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php 
  // function example:
  function myFunction() {
    echo "This text comes from a function";
  }

  // create array:
  $myArr = array("Volvo", 15, ["apples", "bananas"], myFunction());

  // calling the function from the array item:
  $myArr[3];

  // index array:
  echo "<br>";
  $cars = array("Volvo", "BMW", "Toyota");
  array_push($cars, "Ford");
  foreach ($cars as $x) {
    echo "$x <br>";
  }

  // associative array:
  $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
  $car["year"] = 2024;
  $car += ["color" => "red", "year" => 1964];
  array_splice($car, 1, 1);
  unset($car["model"]);  // remove item from an Associative Array
  var_dump($car);

  foreach ($car as $x => $y) {
    echo "$x: $y <br>";
  }

  $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
  $newArray = array_diff($cars, ["Mustang", 1964]); // return new array without selected items

  var_dump($newArray);

  echo "<br>";

  $numbers = array(4, 6, 2, 22, 11);
  rsort($numbers);
  var_dump($numbers);
  sort($numbers);
  var_dump($numbers);

  echo "<br>";

  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  asort($age); // sort array according to value:
  var_dump($age);
  echo "<br>";
  ksort($age); // sort array according to key:
  var_dump($age);  
  
  // multi-dimensional array:
  $cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  
  
  
  
  ?>

</body>

</html>