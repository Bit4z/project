<?php
session_start();
if(isset($_session['username'])){
$_session['msg']="you must log in first to view this page";
header('location:login.php');
}
if(isset($_get['logout'])){
session_destroy();
unset($_session['username']);
header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>
home page</title>
</head>
<body>
<h1>this is the home page</h1>
<?php
if(isset($_session['success']))
?>
<div>
<h3>
<?php
echo $_session['success'];
unset($_session['success']);
?>
</h3>
</div>
<?php endif ?>

//if teh user logs in print information about him
<?php if(isset($_session['username'])); ?>
<h3>welcome <strong><?php echo $_session['username']; ?></strong></h3>
<button><a href="inde.php?logout='1'"></a></button>
<?php endif ?>

</body>
</html>
