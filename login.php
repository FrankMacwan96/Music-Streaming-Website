<html>
<head>


<link rel="stylesheet" type="text/css" href="css/login.css">
<div><img src="images/mslogo.gif" width="150" height="75" alt="logo" >
<input type="button" class="btn" value="SignUp" onclick="window.location.href='signup.php'">
<input type="button" class="btn" value="AdminLogin" onclick="window.location.href='admin/adminlog.php'"> 
</div>
</head>
<body style="background-image:url(images/loginbg.jpg);background-position:center;background-repeat:no-repeat;background-size:100%;">

<ul >
  <li><a class="active" href="home.php" >Home</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Category</a>
    <div class="dropdown-content">
      <a href="songs.php">Rock</a>
	  <a href="songs(edm).php">EDM</a>
	  
	  <li><a class="active" href="aboutus.php">About Us</a><li>	
	  <li><input type="text" class="txt" name="text" placeholder="search" ></li>
  
</ul>
<form method="post" action="usercheck.php">
<div align="center" style="margin-left:1cm;margin-top:3cm;border-color:white;border-width:10;border-radius:10px;background-color:transparent;padding:40px; box-shadow:2px 2px 2px 5px #000000;width:370px;">

 
 <label>Email ID</label>
 <input type="text" id="eml" class="txt" name="Email1" placeholder="Email"><br>
 <label>Password</label>
 <input type="password" id="pwd" class="txt" name="password1"  placeholder="password" ><br><br>
 <input type="submit" name="login" value="Login" style="border-radius:8px;box-shadow:2px 2px 3px black;padding:10px;" onclick="return validate();">


</div>
</form>
<script src="jscript/ja.js"></script> 

</body>
</html>