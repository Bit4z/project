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
$name=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];

$q="select * from register where username='$name' && email='$email' && password='$pass' "; 

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1){
	echo "duplicate data";
}
else{
	$qy="insert into register(username,email,password) values('$name','$email','$pass')";
	mysqli_query($con,$qy);
}

?>