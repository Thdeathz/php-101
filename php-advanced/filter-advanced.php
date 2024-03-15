<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  
  $int = 122;
  $min = 1;
  $max = 200;

  $options = array("options" => array("min_range"=>$min, "max_range"=>$max));

  if (filter_var($int, FILTER_VALIDATE_INT, $options) === false) {
    echo("Variable value is not within the legal range");
  } else {
    echo("Variable value is within the legal range");
  }

  echo "<br>";

  // ip v6 check
  $ipv6 = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
  $ipv4 = "127.0.0.1";

  if (!filter_var($ipv4, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === false) {
    echo("$ipv4 is a valid IPv6 address");
  } else {
    echo("$ipv4 is not a valid IPv6 address");
  }

  echo "<br>";

  $url = "https://www.w3schools.com";

  if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo("$url is a valid URL with a query string");
  } else {
    echo("$url is not a valid URL with a query string");
  }
  
  ?>

</body>

</html>
