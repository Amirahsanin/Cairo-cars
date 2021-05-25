<?php
session_start();
$con=mysqli_connect('localhost','root','','cairocars');


if (isset($_POST['login'])) 
{
$_username=$_POST['username'];
$_password=$_POST['password'];
  
  $qe= " SELECT * FROM signup WHERE username='$_username' and password='$_password'" ;
  $run_query =mysqli_query($con, $qe);
  if( mysqli_num_rows($run_query)> 0)
  {
      $_SESSION['login']=true ;
   header("location:product-page.html");
   } 
    else
   {
    header("location:signup.php");
   }
} 

?>