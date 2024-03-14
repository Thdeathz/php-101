<?php
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

const NAME_REGEX = "/^[a-zA-Z-' ]*$/";
const URL_REGEX = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match(NAME_REGEX, $name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match(URL_REGEX, $website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <label for="name">Name:</label> <input id="name" type="text" name="name" value="<?php echo $name ?? ""; ?>">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br>
    <label for="email"> E-mail:</label> <input id="email" type="text" name="email" value="<?php echo $email ?? ""; ?>">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br>
    <label for="website">Website:</label> <input id="website" type="text" name="website"
      value="<?php echo $website ?? ""; ?>">
    <span class="error"><?php echo $websiteErr; ?></span>
    <br>
    <label for="comment">Comment:</label> <textarea id="comment" name="comment" rows="5"
      cols="40"><?php echo $comment ?? ""; ?></textarea>

    <br>
    Gender:
    <input type="radio" name="gender" value="female"
      <?php if (isset($gender) && $gender == "female") echo "checked"; ?> />Female
    <input type="radio" name="gender" value="male"
      <?php if (isset($gender) && $gender == "male") echo "checked"; ?> />Male
    <input type="radio" name="gender" value="other"
      <?php if (isset($gender) && $gender == "other") echo "checked"; ?> />Other
    <span class="error">* <?php echo $genderErr; ?></span>

    <br>
    <input type="submit" name="submit" value="Submit">


    <?php
    echo "<p>Submitted data:</p>";

    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>

  </form>

</body>

</html>