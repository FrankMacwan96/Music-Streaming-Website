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
	$q=$_SESSION["name"];
    
    $sql="SELECT * FROM `1418bece30030_user` WHERE `full name` LIKE '%".$q."'";
	$p=mysql_query($sql);
    $g=mysql_fetch_assoc($p);
    $idu=$g["UID"]; 	
	$sql1="SELECT * FROM `1418bece30030_playlist` WHERE `uID` LIKE '%".$idu."'"; 
	$p1=mysql_query($sql1);
	
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
  
  <li><input type="text" name="text" placeholder="search" ></li>
</ul>

<div style="margin-left:2.5cm;margin-top:0.5cm;border-color:white;border-width:15px;border-radius:10px;background-color:white;padding:15px;box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);width:1000px;max-height:1000px;overflow:scroll;">
<?php
$i=1;
$s1="select * from 1418BECE30030_songs";
 $r1=mysql_query($s1);
  
while($er=mysql_fetch_assoc($p1))
{   $ids=$er["sID"]; 
    $sq=mysql_query("SELECT * FROM  `1418bece30030_songs` WHERE  `sid` =".$ids."");
	$sr=mysql_fetch_assoc($sq);
	echo "<div style='box-shadow:0px 1px black;padding:10px;'><a class='a' href='".$ids.".php' >".$i.". ".$sr["songname"]."</a><a class='aa' style='float:right;text-decoration:none;' href='dlt.php?delete=".$i."'>Remove</a></div>";
	$i++;
}	
?>
</div>

</body>
</html>