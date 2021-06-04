<?php
session_start();  
//initialisation variable

$uname="";
$email1="";
$errors=array();
//connect to db

$db=mysqli_connect('localhost','root','','practice') or die ("could not connect to database");
//register users

$username=mysqli_real_escape_string($db, $_POST['username']);
$email=mysqli_real_escape_string($db, $_POST['email']);
$password=mysqli_real_escape_string($db, $_POST['password']);
//form validation
if(empty($username)){array_push( $errors,"username is required");} 
if(empty($$email)){array_push( $errors,"email is required");} 
if(empty($password)){array_push( $errors,"password is required");} 
//check db for existing user with same username
$user_check_query="select from register where username='$username' or email='$email'limit 1";
$result=mysqli_query($db,$user_check_query);
$user=mysqli_fetch_assoc($result);
if($user)
{
	if($user['username']==$username){array_push($errors,"username already exist");}
		if($user['email']==$email){array_push($errors,"this email id already has a registered");}
		
		}

//register the user if no error
if(count($errors)==0){
	$password=md5($password);//this will encrypt the password
	$query="insert into register(username,email,password) values('$username','$email','$password')";
	mysqli_query($db,$query);
	$_session['username']=$username;
	$_session['username']="you are now logged in";
	header('location:inde.php');
}
		
		







?>