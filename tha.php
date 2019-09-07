<html>
<head>
<link rel="stylesheet" type="text/css" href="css/home.css">
<div><img src="images/mslogo.gif" width="150" height="75" alt="logo" >
<input type="button" class="btn" value="SignUp" onclick="window.location.href='signup.php'">
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
<body style="background-image:url(images/img.jpg);background-position:center;background-repeat:no-repeat;background-size:100%;">
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  
  <li class="dropdown">
    <a href="#" class="dropbtn">Category</a>
    <div class="dropdown-content">
      <a href="songs.php">Rock</a>
      <a href="songs(edm).php">EDM</a>	  
	  
	  
    </div>
  </li>
  
  <li><a class="active" href="aboutus.php" >About Us</a></li>
  <li>  
	  <?php
      
	   
     if(isset($_SESSION["name"]))
	 {                                   	 
         echo "<a class='active' href='playlist.php'>My Playlist</a>";     
     } 
?>
   </li>
 
</ul>
 <pre>
  Thank you. 
  successfully signed up!!
<?php
   
   
   echo "Your name: ".$_SESSION["fn"]."\n";
   echo "Your Email ID: ".$_SESSION["email"]."\n";   
   echo "Your Mobile: ".$_SESSION["mobile"]."\n";
?>   
 </pre>                              
</body>
</html>