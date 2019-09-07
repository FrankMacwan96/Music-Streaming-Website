<?php 
echo '<html>
<link rel="stylesheet" type="text/css" href="css/home.css">
<div><img src="mslogo.gif" width="150" height="75" alt="logo" >
<input type="button" class="btn" value="SignUp" onclick="window.location.href="signup.php"">
<input type="button" class="btn" value="Login" onclick="window.location.href="login.php"">
<input type="button" class="btn" value="AdminLogin" onclick="window.location.href="adminlog.php""> 
</div>


<ul>
  <li><a class="active" href="home.php">Home</a></li>
  
  <li class="dropdown">
    <a href="#" class="dropbtn">Category</a>
    <div class="dropdown-content">
      <a href="songs.php">Rock</a>
	  <a href="songs(edm).php">EDM</a>
	  
	  
    </div>
	
  </li>
  <li><a class="active" href="aboutus.php">About Us</a></li>	
	  <li><input type="text" name="text" placeholder="search" >
	  </li>
</ul>
</html>';
?>