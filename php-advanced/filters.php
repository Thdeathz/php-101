<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <table>
    <tr>
      <td>Filter Name</td>
      <td>Filter ID</td>
    </tr>
    <?php
      // PHP filters used to validate and sanitize external input.
      foreach (filter_list() as $id =>$filter) {
        echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
      }
    ?>
  </table>

  <?php 
  $str = "<h1>Hello World!</h1>";
  $newstr = filter_var($str); // remove all html tags
  echo $newstr;

  echo "<br>";

  // check if variable is an integer (value is integer not type is integer)
  $int = "100"; // still valid
  if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
  } else {
    echo("Integer is not valid");
  }
  ?>

</body>

</html>
