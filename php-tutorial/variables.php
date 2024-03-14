<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php 
    $txt = "W3Schools.com";
    echo "I love $txt! <br>";

    $x = 5;
    $y = 4;
    echo $x + $y;

    echo "<br>";

    // get var type
    $x = "Hello world!";
    var_dump($x);
    var_dump(5);
    var_dump("John");
    var_dump(3.14);
    var_dump(true);
    var_dump([2, 3, 56]);
    var_dump(NULL);


    // global variable
    $x = 5; // global scope

    // function myTest() {
      // using x inside this function will generate an error
      // echo "<p>Variable x inside function is: $x</p>";
    // }
    // myTest();

    echo "<p>Variable x outside function is: $x</p>";


    // global keyword: used to access a global varia
    $x = 5;
    $y = 10;

    function myTest() {
      global $x, $y;
      $y = $x + $y;
    }

    myTest();
    echo $y; // outputs 15
  ?>

</body>

</html>