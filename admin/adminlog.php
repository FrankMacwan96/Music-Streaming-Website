 
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/login.css">
<div><img src="mslogo.gif" width="150" height="75" alt="logo" >
<?php
      session_start(); 
	   
     if(isset($_SESSION["name"]))
	 {                                   	 
       
     echo "<form method='post' action='../s.php' style='float:right;'><input type='submit' class='btn' value='".$_SESSION["name"]."' ></form>";
	 }
	 else{
	echo "<form method='post' action='../login.php' style='float:right;'><input type='submit' class='btn' value='Login'></form>";
	 }
	 ?>
<input type="button" class="btn" value="SignUp" onclick="window.location.href='../signup.php'">
</div>
</head>
<body style="background-image:url(loginbg.jpg);background-position:center;background-repeat:no-repeat;background-size:100%;">

<ul >
  <li><a class="active" href='../home.php' >Home</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Category</a>
    <div class="dropdown-content">
      <a href="../songs.php">Rock</a>
	  <a href="../songs(edm).php">EDM</a>
	  
	  <li><a class="active" href="../aboutus.php">About Us</a><li>	
	  <li><input type="text" class="txt" name="text" placeholder="search" ></li>
  
</ul>
<form method="post" action="adminpage.php">
<div align="center" style="margin-left:1cm;margin-top:3cm;border-color:white;border-width:10;border-radius:10px;background-color:transparent;padding:40px; box-shadow:2px 2px 2px 5px #000000;width:370px;">

 
 <label>Username</label>
 <input type="text" id="email" class="txt" name="uname" placeholder="Username"><br>
 <label>Password</label>
 <input type="password" id="pwrd" class="txt" name="password"  placeholder="password" ><br><br>
 <input type="submit" name="login" value="Login" style="border-radius:8px;box-shadow:2px 2px 3px black;padding:10px;" onclick="return validate3();">


</div>
</form>
<script src="jscript/j2.js"></script> 

</body>
</html>