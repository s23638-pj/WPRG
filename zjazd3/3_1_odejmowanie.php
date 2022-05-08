<html>
<body>
<?php 
$value1=$_POST['liczba1'];
$value2=$_POST['liczba2'];


switch($_POST['action']){
   case 'substract':  $result=$value1-$value2;break;
}
?>


</body>
</html>