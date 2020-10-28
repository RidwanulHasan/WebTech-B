<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD GROUP</title>
</head>
<body>
<center>
    <h2>PHP Form Validation Example</h2>
    <form action="action.php">
        <fieldset>

            <legend>BLOOD GROUP</legend>

                <select name="BLOOD GROUP" id="BLOOD GROUP">
                    <option value="Blood Group">Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="O+">O+</option>
                    <option value="AB+">AB+</option>
                    <option value="O-">O-</option>

                 </select><br><br>
        <input type="submit" value="submit">

        </fieldset>

    </form>
</center>

<?php
echo "<h2>Your Input:</h2>";
?>
    
</body>
</html>