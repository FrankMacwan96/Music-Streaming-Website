<html>
<head>
<link rel="stylesheet" type="text/css" href="css/home.css">
<div><img src="images/mslogo.gif" width="150" height="75" alt="logo" >
<?php
      session_start(); 
	  if(isset($_SESSION["eml"])&&isset($_SESSION["pwd"]))
       goto X;
      else
       echo "<script>window.alert('you need to login again'); window.location.href='home.php';</script>";		
   
  X:   if(isset($_SESSION["name"]))
	 {                                   	 
       
     echo "<form method='post' action='lout.php' style='float:right;'><input type='submit' class='btn' value='logout' ></form>";
	 }
	 else{
	echo "<form method='post' action='login.php' style='float:right;'><input type='submit' class='btn' value='Login'></form>";
	 }
	 ?>
<input type="button" class="btn" value="SignUp" onclick="window.location.href='signup.php'">

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
  
<?php
   
   $c=mysql_connect("localhost","root","");
   $m=mysql_select_db("1418BECE30030",$c);
   
   $q=$_SESSION["name"];
    
   $sql="SELECT * FROM `1418bece30030_user` WHERE `full name` LIKE '%".$q."'";
   $r1=mysql_query($sql);
   $res=mysql_fetch_assoc($r1);
   echo "Your Name:  ".$res["full name"]."\n";
   echo "Your Email:  ".$res["email"]."\n";
   echo "Your Mobile:  ".$res["mobile"]."\n";
   
?>   
 </pre>                              
</body>
</html>