<html>
<head>
<link rel="stylesheet" type="text/css" href="css/aboutus.css">
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
<input type="button" class="btn" value="SignUp" onclick="window.location.href='signup.php'">

<input type="button" class="btn" value="AdminLogin" onclick="window.location.href='admin/adminlog.php'"> 
</div>
</head>
<body style="background-image:url(images/cus.jpg);background-position:center;background-repeat:no-repeat;background-size:cover;background-attachement:scroll;">
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  
  <li class="dropdown">
    <a href="#" class="dropbtn">Category</a>
    <div class="dropdown-content">
      <a href="songs.php">Rock</a>
      <a href="songs(edm).php">EDM</a>	  
	  <li><input type="text" name="text" placeholder="search" >
	  </li>
    </div>
	
   </li>
   <li>  
	  <?php
      
	   
     if(isset($_SESSION["name"]))
	 {                                   	 
         echo "<a class='active' href='playlist.php'>My Playlist</a>";     
     } 
?>
   </li>
  </li>
</ul>
 
 <p style="color:black;font-family:Times New Roman;font-size:50px;text-align:center;text-shadow:2px 2px 2px grey;cursor:context-menu;">Music Skull</p>
<p style="float:center">  
<pre>
If have any query you can contact us,our details are given below.
         Name  : Frank Macwan
	Mobile: 9669959949
	  Email : Macwanfrank96@gmail.com
   please send us your feedback.
</pre>   
</p> 
 <div align="center">
<form method="post" action="feed.php">
<pre>
<label>Your name</label>
<input type="text" name="n" id="n1">
 <label>Your Mobile Number</label>
 <input type="text" name="q" id="q1">
 <label>Your Email</label>
 <input type="text" name="w" id="w1">
 <label>Feedback</label>
 <textarea rows="10" cols="50" name="e" id="e1"></textarea>
 <input class='btn1' type="submit" name="r" id="r1" >
</pre> 
 
</form> 
</div>
</body>
</html>