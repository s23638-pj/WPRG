<!DOCTYPE HTML>
<html>  
<body>

<form action="3_1.php" method="post">
liczba1: <input type="text" name="liczba1"><br>
liczba2: <input type="text" name="liczba2"><br>
<input type="radio" id='1' value='add' name="action">dodawanie:
<input type="radio" id='2' value='substract' name="action">odejmowanie: 
<input type="radio" id='3' value='multiplication' name="action">mnozenie:
<input type="radio" id='4' value='divide' name="action">dzielenie:<br>
<input type="submit">
</form>

</body>
</html>

<html>
<body>
<?php 
ini_set('log_errors','On');
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);    
    
$value1=$_POST['liczba1'];
$value2=$_POST['liczba2'];


switch($_POST['action']){
   case 'add':  require '3_1_dodawanie.php';
   case 'substract':  require '3_1_odejmowanie.php';
   case 'multiplication':   require '3_1_mnozenie.php';
   case 'divide':  require '3_1_dzielenie.php';
}
echo("result: $result");
?><br>


</body>
</html>
