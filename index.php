<?php
include 'dbh.php';
session_start();
?>

<html>
<head>
<title>CGPA Calculator</title>
<link rel="stylesheet" href="calstyle.css">
</head>
<body>
    <div class="editit">
        <div class="heading"><h1>Calculate Cgpa</h1><br>
            </div>
         <?php
        if (isset($_SESSION['cgpa']))
        {
            echo $_SESSION['cgpa'] ;
                session_unset();
                session_destroy();
        }
        ?>
        <br><br><br>
<form method="post" action="calculate.php">
<input type="number" name="credit1" placeholder="credit">
<select name="grade1">
<option value='10'>O</option>
<option value='9'>A+</option>
<option value="8">A</option>
<option value="7">B+</option>
<option value="6">B</option>
<option value="5">C</option>
<option value="4">P</option>
<option value="0">F</option>
<option value="0">Ab</option>
<option value="0">I</option>
</select> <br><br>
<input type="number" name="credit2" placeholder="credit">
<select name="grade2">
<option value='10'>O</option>
<option value='9'>A+</option>
<option value="8">A</option>
<option value="7">B+</option>
<option value="6">B</option>
<option value="5">C</option>
<option value="4">P</option>
<option value="0">F</option>
<option value="0">Ab</option>
<option value="0">I</option>
</select> <br><br>
<input type="number" name="credit3" placeholder="credit">
<select name="grade3">
<option value='10'>O</option>
<option value='9'>A+</option>
<option value="8">A</option>
<option value="7">B+</option>
<option value="6">B</option>
<option value="5">C</option>
<option value="4">P</option>
<option value="0">F</option>
<option value="0">Ab</option>
<option value="0">I</option>
</select> <br><br>
<input type="number" name="credit4" placeholder="credit">
<select name="grade4">
<option value='10'>O</option>
<option value='9'>A+</option>
<option value="8">A</option>
<option value="7">B+</option>
<option value="6">B</option>
<option value="5">C</option>
<option value="4">P</option>
<option value="0">F</option>
<option value="0">Ab</option>
<option value="0">I</option>
</select> <br><br>
<input type="number" name="credit5" placeholder="credit">
<select name="grade5">
<option value='10'>O</option>
<option value='9'>A+</option>
<option value="8">A</option>
<option value="7">B+</option>
<option value="6">B</option>
<option value="5">C</option>
<option value="4">P</option>
<option value="0">F</option>
<option value="0">Ab</option>
<option value="0">I</option>
</select> <br><br>
<input type="number" name="credit6" placeholder="credit">
<select name="grade6">
<option value='10'>O</option>
<option value='9'>A+</option>
<option value="8">A</option>
<option value="7">B+</option>
<option value="6">B</option>
<option value="5">C</option>
<option value="4">P</option>
<option value="0">F</option>
<option value="0">Ab</option>
<option value="0">I</option>
</select> <br><br>
<input type="number" name="credit7" placeholder="credit">
<select name="grade7">
<option value='10'>O</option>
<option value='9'>A+</option>
<option value="8">A</option>
<option value="7">B+</option>
<option value="6">B</option>
<option value="5">C</option>
<option value="4">P</option>
<option value="0">F</option>
<option value="0">Ab</option>
<option value="0">I</option>
</select> <br><br>
<input type="number" name="credit8" placeholder="credit">
<select name="grade8">
<option value='10'>O</option>
<option value='9'>A+</option>
<option value="8">A</option>
<option value="7">B+</option>
<option value="6">B</option>
<option value="5">C</option>
<option value="4">P</option>
<option value="0">F</option>
<option value="0">Ab</option>
<option value="0">I</option>
</select> <br><br>
<input type="number" name="credit9" placeholder="credit">
<select name="grade9">
<option value='10'>O</option>
<option value='9'>A+</option>
<option value="8">A</option>
<option value="7">B+</option>
<option value="6">B</option>
<option value="5">C</option>
<option value="4">P</option>
<option value="0">F</option>
<option value="0">Ab</option>
<option value="0">I</option>
</select> <br><br>
<input type="number" name="credit10" placeholder="credit">
<select name="grade10">
<option value='10'>O</option>
<option value='9'>A+</option>
<option value="8">A</option>
<option value="7">B+</option>
<option value="6">B</option>
<option value="5">C</option>
<option value="4">P</option>
<option value="0">F</option>
<option value="0">Ab</option>
<option value="0">I</option>
</select> <br> <br>
<button type="submit" name="submit">Calculate</button>
    <br><br>

</form>
       
        
    </div>
</body>
</html>