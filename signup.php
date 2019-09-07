
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/signup.css">

<div><img src="images/mslogo.gif" width="150" height="75" alt="logo" >
<?php
      session_start(); 
	   
     if(isset($_SESSION["name"]))
	 {                                   	 
       echo "<form method='post' action='s.php' style='float:right;'><input type='submit' class='btn' value='".$_SESSION["name"]."' ></form>";
	 }
	 else{
	echo "<form method='post' action='login.php' style='float:right;'><input type='submit' class='btn' value='Login'></form>";
	 }
	 ?>
<input type="button" class="btn" value="AdminLogin" onclick="window.location.href='admin/adminlog.php'"> 
</div>
</head>
<body style="background-image:url(images/loginbg.jpg);background-position:center;background-repeat:no-repeat;background-size:100%;">
<ul >
  <li><a class="active" href="home.php" style="text-decoration:none;">Home</a></li>
   <li class="dropdown">
    <a href="#" class="dropbtn">Category</a>
    <div class="dropdown-content">
      <a href="songs.php">Rock</a>
	  <a href="songs(edm).php">EDM</a>
  <li><a class="active" href="aboutus.php" >About Us</a></li>
  <li><input type="text" class="txt" name="text" placeholder="search" ></li>  
</ul>
<form method="post" action="checks.php">
<div align="center" style="margin-left:1cm;margin-top:1cm;border-color:white;border-width:10;border-radius:10px;background-color:transparent;padding:40px; box-shadow: 2px 2px 5px #000000;width:370;">

 
 <label>Full Name</label>
 <input type="text" id="fn" class="txt" name="fna" placeholder="full name"><br>
 <label>Mobile no.</label>
 <input type="text" id="mn" class="txt" name="mobile" placeholder="mobile number"><br>
 <label>Email</label>
 <input type="text" id="emal" class="txt" name="email" placeholder="Email" ><br>
 <label>Password</label>
 <input type="password" id="pwrd" class="txt" name="password" placeholder="Password" ><br>
 <label>Confirm Password</label>
 <input type="password" id="cpwrd" class="txt" name="cpassword" placeholder="ConfirmPassword" ><br><br>
 
 <input type="submit" name="signup" value="SignUp" style="border-radius:8px;box-shadow:2px 2px 3px black;padding:10px;" onclick="return validate2();">
 <input type="Reset" name="Reset" style="border-radius:8px;box-shadow:2px 2px 3px black;padding:10px;">


</div>
</form>
<script src="jscript/ja2.js"></script>
</body>
</html>