<?php
$con=mysqli_connect('localhost','root','','cairocars');
if(isset($_POST['update']))
{
    $_fname =$_POST['fname'];

    $q=" UPDATE signup SET fname='$_POST[fname]', lname='$_POST[lname]' , username='$_POST[username]' , password='$_POST[password]',
    conpassword='$_POST[conpassword]' ,email='$_POST[email]',
    dob='$_POST[dateofbirth]', nid='$_POST[nationalid]' " ;
    $run_query =mysqli_query($con, $q);

    header("location:home.html");

}

?>