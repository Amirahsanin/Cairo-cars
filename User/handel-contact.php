
<?php 

$con=mysqli_connect('localhost','root','','cairocars');

$_name=$_POST['name'];
$_email=$_POST['email'];
$_subject=$_POST['subject'];
$_message=$_POST['message'];


if (isset($_POST['islogin'])) 
{
    $_name=$_POST['name'];
    $_email=$_POST['email'];
    $_subject=$_POST['subject'];
    $_message=$_POST['message'];

$qu= "INSERT INTO contact (`Name`, `email`, `subject`, `message`) 
VALUES ('$_name','$_email','$_subject','$_message')";
mysqli_query($con, $qu);

header("location:home.html");
}


?>