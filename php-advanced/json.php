<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

  echo json_encode($age);

  $cars = array("Volvo", "BMW", "Toyota");

  echo json_encode($cars);

  echo "<br>";

  $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

  var_dump(json_decode($jsonobj));

  echo "<br>";

  $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

  // access value of json object return from a indexed array 
  $obj = json_decode($jsonobj);

  echo $obj->Peter;
  echo $obj->Ben;
  echo $obj->Joe;

  echo "<br>";

  // access value of json object return from an associative array
  $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

  $arr = json_decode($jsonobj, true);

  echo $arr["Peter"];
  echo $arr["Ben"];
  echo $arr["Joe"];

  foreach($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
  }
  ?>

</body>

</html>
