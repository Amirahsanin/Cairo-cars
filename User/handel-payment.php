<?php 
$con=mysqli_connect('localhost','root','','cairocars');



$_holder=$_POST['hold'];
$_number=$_POST['num'];

if (isset($_POST['hold'] )) 
{
    
$_holder=$_POST['hold'];
$_number=$_POST['num'];

$qu= "INSERT INTO payment (`holder`, `number`)
 VALUES ('$_holder','$_number')";

mysqli_query($con, $qu);

header("location:Mycart.html");
}

?>