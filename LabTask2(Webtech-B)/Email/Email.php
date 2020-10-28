<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMAIL</title>
</head>
<body>

<?php
$email="";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    echo  $email = test_input($_POST["email"]);

}

function test_input($email) {
    $email = trim($email);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    return $email;
  }
?>

<center>
<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset>

        <legend><b>Email<b></legend>
            <input type="text" name="Email" placeholder="Email" pattern=""><br><br>
            <input type="submit" value="submit">

    </fieldset>
</form>
</center>

<?php
echo "<h2>Your Input:</h2>";
echo $email;
?>


    
</body>
</html>