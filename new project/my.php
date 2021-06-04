<?php include('server.php') ?>
<html>
<head>
<title>
log in page
</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
<h1 style="font-size:32;text-align:center;color:blue;">56 delights.com</h1>
<hr style="width:95%;height"5px;border:2px solid black;background-color:black;">
<div style="width:95%;padding:50px;text-align:center;">
<header style="width:75%;height:50px;border:2px solid black;background-color:black;margin-left:150px;">
<button style="width:150px;margin-left:10px;padding:11px;border:none;font-size:22px;background-color:black;color:white;"><a href="raj.html"style="color:white;">home</a></button>
<button style="width:150px;margin-left:10px;padding:10px;font-size:22px;background-color:black; border:none;color:white;"><a href="about.html" style="color:white;">about us</a></button>
<button style="width:150px;margin-left:10px;padding:10px;font-size:22px;background-color:black;border:none;color:white;">menu</button>
<button style="width:150px;margin-left:10px;padding:10px;font-size:22px;background-color:black;border:none;color:white;">service</button>
<button style="width:150px;margin-left:10px;padding:10px;font-size:22px;background-color:black;border:none;color:white;">feedback</button>
</header>
</div>
<div class="login-page">
<div class="form">
   <form class="register-form" action="registration.php" method="post">
   <?php include('errors.php') ?>
   <input type="text" name="username" placeholder="username" required>
     <input type="email" name="email" placeholder="email id" required>
   <input type="password" name="password" placeholder="password"required>
 
   <button type="submit" name="submit">creat</button>
   <p class="massage">already registered?<a href="#">login</a>
   </p>
   </form>
   <form class="login-form" action="login.php" method="post">
   <input type="email"name="email" placeholder="email id" required>
   <input type="password"name="password"  placeholder="password"required>
   <button type="submit" name="submit">login</button>
   <p class="massage">not registered?<a href="#" style="color:blue;">register</a>
   </p>
   </form>
</div>
</div>
<script src='https://code.jquery.com/jquery-3.2.1.min.js'>
</script>
<script>
$('.massage a').click(function(){$('form').animate({height:"toggle",opacity:"toggle"},"slow");});
</script>
<i><font color="blue"size="5">type of speciel and delecious and fast delievery</font></i> 
<br>
<center>
<marquee>
<img src="b.jpg"width="195"hieght="180"border="5">
<img src="c.jpg"width="195"hieght="180"border="5">
<img src="d.jpg"width="195"hieght="180"border="5">
<img src="e.jpg"width="195"hieght="180"border="5">
<img src="g.jpg"width="195"hieght="180"border="5">
<img src="h.jpg"width="195"hieght="180"border="5">
<img
src="f.jpg"width="195"hieght="320"border="5">
<img
src="j.jpg"width="195"hieght="180"border="5">
welcome to 56 delights restaurent
</marquee>
</center>

<mark><br>better quality food</br></mark>
<address>
<ins><font color="blue">information</font></ins>
<br>
<i>virandavan (mathura)</i>
<br>
<i>highway road NH2-Delhi</i>
<br>
<i>mobile no.=7060544392</i>
<br>
</address>
</body>
</html>