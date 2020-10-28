<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEGREE</title>
</head>
<body>
<center>
<h2>PHP Form Validation Example</h2>
     <form action="action.php">
        <fieldset>

            <legend>DEGREE</legend>
     
                <input type="checkbox" id="checkbox" name="checkbox" value="">SSC
                <input type="checkbox" id="checkbox" name="checkbox" value="">HSC
                <input type="checkbox" id="checkbox" name="checkbox" value="">BSc
                <input type="checkbox" id="checkbox" name="checkbox" value="">MSc<br><br>
                <input type="submit" value="submit">

     </fieldset>
     
     </form>
</center>

<?php
echo "<h2>Your Input:</h2>";
?>
    
</body>
</html>