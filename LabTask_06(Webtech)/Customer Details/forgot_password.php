<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
	
</head>
<body>

<?php
$emailErr = "";

if (empty($_POST["email"])) {
    $emailErr = "";
  } else {
    $email = test_input($_POST["email"]);
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
?>

<form>
  <h2>FORGOT PASSWORD</h2>
  E-mail: <input type="text" name="email">
  <span class="error"><?php echo $emailErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<table align="left"><br><br><br>
<tr>

<td><a href="login.php"> Login </a></td>
<td><a href="home.php"> Home </a></td>

</tr>
</table>


<?php include 'footer.php';?>

</body>
</html>