<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name</title>
</head> 
<body>



<?php 
$name="";
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);

}

function test_input($name) {
    $name = trim($name);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    return $name;
  }
  ?>
<center>
<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  <fieldset>
    <legend><b>Name</b></legend>
      <input type="text" name="Name" placeholder="Name" pattern=""><br><br>
      <input type="submit" value="Submit">
  </fieldset>
</form>
</center>

<?php
echo "<h2>Input:</h2>";
echo "<br>";
echo $name;

   ?>



</body>
</html>