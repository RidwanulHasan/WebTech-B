<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender</title>
</head>
<body>


<center>
   <h2>PHP Form Validation Example</h2>
   <form action="action.php">
      <fieldset>

            <legend><b>GENDER<b></legend>

                <table>
                    <td>
                        <input type="radio" id="radio" name="radio" value="">Male
                         <input type="radio" id="radio" name="radio" value="">Female
                        <input type="radio" id="radio" name="radio" value="">Others</input><br><br>
                        <input type="submit" value="submit">
                    </td>
                </table>

        </fieldset>
 
     </form>
</center>

<?php
echo "<h2>Your Input:</h2>";
?>
     
    
</body>
</html>