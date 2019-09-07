<html>
<head>

<link rel="stylesheet" type="text/css" href="css/songs.css">
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
	 $c=mysql_connect("localhost","root","");
     $m=mysql_select_db("1418bece30030",$c);
	 ?>
<input type="button" class="btn" value="SignUp" onclick="window.location.href='signup.php'">

<input type="button" class="btn" value="AdminLogin" onclick="window.location.href='admin/adminlog.php'"> 
</div>
</head>
<body style="background-image:url(images/edmbg.jpg);background-position:center;background-repeat:no-repeat;background-size:100%;">
<ul >
  <li><a class="active" href="home.php">Home</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Category</a>
    <div class="dropdown-content">
      <a href="songs.php">Rock</a>
	  <a href="songs(edm).php">EDM</a>
  <li><a class="active" href="aboutus.php">About Us</a></li>
  <li>  
	  <?php
      
	   
     if(isset($_SESSION["name"]))
	 {                                   	 
         echo "<a class='active' href='playlist.php'>My Playlist</a>";     
     } 
?>
   </li>
  <li><input type="text" name="text" placeholder="search" ></li>
</ul>

<div class="dv">
<p style="float:left;color:black;margin-left:0cm;margin-top:0cm;cursor:context-menu;text-shadow: 1px 1px 2px black;font-size:25px;">According to:</p>
<a class="a1" href="artist(edm).php">Artists</a>
<a class="a1" href="songs(edm).php" style="color:#1E90FF;">Songs</a>
</div>
<form>
<div style="margin-left:2.5cm;margin-top:0.5cm;border-color:white;border-width:15px;border-radius:10px;background-color:white;padding:15px;box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);width:1000px;max-height:1000px;overflow:scroll;">
<div style="box-shadow:0px 1px black;padding:10px;">
<a class="a" href="1.php" >1. Beautiful Now</a>

<a class="btn1" href="add.php?idd=<?php $sql1= "SELECT * FROM `1418bece30030_songs` WHERE `songname` LIKE '%Beautiful now' ";
	 $rr=mysql_query($sql1);
     $res=mysql_fetch_assoc($rr);
     echo $res["sid"];    	 ?>&curl=<?php echo $_SERVER['PHP_SELF'];?>">Add to Playlist</a>
<a class="btn1" href="download.php?p=<?php echo $_SERVER['PHP_SELF'];?>&q=Beatifulnow.mp3">Download</a>	  
</div>
<div style="box-shadow:0px 1px black;padding:10px;">
<a class="a" href="2.php" >2. Faded</a>

<a class="btn1" href="add.php?idd=<?php $sql2= "SELECT * FROM `1418bece30030_songs` WHERE `songname` LIKE '%Faded' ";
	 $re=mysql_query($sql2);
     $res1=mysql_fetch_assoc($re);
     echo $res1["sid"];    	 ?>&curl=<?php echo $_SERVER['PHP_SELF'];?>">Add to Playlist</a>
<a class="btn1" href="download.php?p=<?php echo $_SERVER['PHP_SELF'];?>&q=Faded.mp3">Download</a>
</div>

</div>
</form>
</body>
</html>