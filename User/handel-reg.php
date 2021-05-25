
<?php 

$con=mysqli_connect('localhost','root','','cairocars');
if($con)
{
    echo "connected";
}else 
{
    echo "noo";
}
$_fname=$_POST['firstname'];
$_lname=$_POST['lastname'];
$_username=$_POST['username'];
$_password=$_POST['password'];
$confpassword=$_POST['confirm_password'];
$_email=$_POST['email'];
$_dof=$_POST['date-of-birth'];
$_nid=$_POST['national-id'];

if (isset($_POST['islogin'])) 
{
$_fname=$_POST['firstname'];
$_lname=$_POST['lastname'];
$_username=$_POST['username'];
$_password=$_POST['password'];
$confpassword=$_POST['confirm_password'];
$_email=$_POST['email'];
$_dof=$_POST['date-of-birth'];
$_nid=$_POST['national-id'];

$q= "INSERT INTO  signup(`fname`, `lname`, `username`, `password`, `conpassword`, `email`, `dob`, `nid`) 
VALUES ('$_fname','$_lname','$_username','$_password','$confpassword','$_email','$_dof','$_nid')";
mysqli_query($con, $q);

header("location:home.html");
}

?>