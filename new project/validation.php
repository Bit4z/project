<?php 
session_start();

$con=mysqli_connect('localhost','root');
if($con)
{
echo "connection successfull";
}
else
{
echo "no connection";
}
mysqli_select_db($con,'practice');

$email=$_POST['email'];
$pass=$_POST['password'];

$q="select * from register where email='$email' && password='$pass' ";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1){
	$_session['email']=$email;
	header('location:search.html');
}
else{
	header('location:asd.php');
}

?>