<html>
<head>

<link rel="stylesheet" type="text/css" href="css/1.css">
<div><img src="images/mslogo.gif" width="150" height="75" alt="logo" style="background-color:white;">
<?php
      session_start(); 
	  
     if(isset($_SESSION["name"]))
	 {                                   	 
       
     echo "<form method='post' action='s.php' style='float:right;'><input type='submit' class='btn' value='".$_SESSION["name"]."' ></form>";
	 }
	 else{
	echo "<form method='post' action='login.php' style='float:right;'><input type='submit' class='btn' value='Login'></form>";
	 }
	 $c=mysql_connect("localhost","root","");
   $m=mysql_select_db("1418bece30030",$c);
	 ?>
<input type="button" class="btn" value="SignUp" onclick="window.location.href='signup.php'">

<input type="button" class="btn" value="AdminLogin" onclick="window.location.href='admin/adminlog.php'"> 
</div>
</head>
<body style="background-image:url(images/rockbg.jpg);background-position:center;background-repeat:no-repeat;background-size:100%;">
<ul >
  <li><a class="active" href="home.php" style="text-decoration:none;">Home</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Category</a>
    <div class="dropdown-content">
      <a href="songs.php">Rock</a>
	  <a href="songs(edm).php">EDM</a>
  <li><a class="active" href="aboutus.php" style="text-decoration:none;">About Us</a></li>
<li>  
	  <?php
      
	   
     if(isset($_SESSION["name"]))
	 {                                   	 
         echo "<a class='active' href='playlist.php'>My Playlist</a>";     
     } 
?>
   </li>  
</ul>
<form>
<div style="margin-left:3cm;margin-top:0cm;border-color:white;border-width:10;border-radius:10px;width:1000px;height:500px;background-color:transparent;padding:10px; box-shadow: 2px 2px 5px black;background-repeat:no-repeat;background-position:center;background-color:white;">
<img src="images/as.jpg" width="200" height="200" alt="logo" style="box-shadow: 1px 2px 4px black;float:left">

<a class="btn1" href="add.php?idd=<?php $sql3= "SELECT * FROM `1418bece30030_songs` WHERE `songname` LIKE '%The Animal' ";
	 $rq=mysql_query($sql3);
     $res2=mysql_fetch_assoc($rq);
     echo $res2["sid"];    	 ?>&curl=<?php echo $_SERVER['PHP_SELF'];?>">Add to Playlist</a>
<a class="btn1" href="download.php?p=<?php echo $_SERVER['PHP_SELF'];?>&q=The Animal.mp3">Download</a>	 	 
<p>Artist : Disturbed</p>
<p>Album: Asylum</p>
<p>Release: August 2010</p>
<audio controls style="margin-top:3cm;width:50%;margin-left:4cm;">
<source src="songs/TA.ogg" type="audio/ogg">
<source src="songs/TA.mp3" type="audio/mpeg">
</audio>
<p align="center" style="font-size:30px;background-color:#1E90FF;color:white;">The Animal</P>
</div>
</form>
</body>
</html>