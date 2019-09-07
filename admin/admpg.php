<?php
  session_start();
  if(isset($_SESSION['user'])&&isset($_SESSION['pwrd']))
   goto X;
  else
    echo "<script>window.alert('you need to login again'); window.location.href='adminlog.php';</script>";	  
X: $c=mysql_connect("localhost","root","");
   $m=mysql_select_db("1418bece30030",$c);
   $s="SELECT * FROM  `1418bece30030_user` LIMIT 0 , 30";
   $r=mysql_query($s);
   $i=1;
   $res=mysql_fetch_assoc($r);
 
?>  
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/songs.css">
<div><img src="mslogo.gif" width="150" height="75" alt="logo">

<input type="button" class="btn" value="Logout" onclick="window.location.href='adminlogout.php'">
</div>
</head>
<body style="background-image:url(img.jpg);background-position:center;background-repeat:no-repeat;background-size:100%;">
<ul >
  <li><a class="active" href="../home.php">Home</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Category</a>
    <div class="dropdown-content">
      <a href="../songs.php">Rock</a>
	  <a href="../songs(edm).php">EDM</a>
  <li><a class="active" href="aboutus.php">About Us</a></li>
  <li><input type="text" name="text" placeholder="search" ></li>
</ul>

<div class="dv">
<p style="float:left;color:white;font-family:arial;font-size:25px;margin-left:0cm;margin-top:0cm;cursor:context-menu;text-shadow: 2px 2px 3px black;">According to:</p>
<a class="a1" href="#" id="1" onclick="javascript:change('u');" style="text-decoration:none;color:#1E90FF;">Users</a>
<a class="a1" href="#" onclick="javascript:change('s');" id="2" style="text-decoration:none;color:white;">Songs</a>
</div>
<form>
<div style="margin-left:2.5cm;margin-top:0.5cm;border-color:white;border-width:15px;border-radius:10px;background-color:white;padding:15px;box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);width:1000px;max-height:1000px;overflow:scroll;">
<div style="box-shadow:0px 1px black;padding:10px;">
<table border='1' id="u" style="cursor:text;">
  <th>No</th><th>Name</th><th>Mobile</th><th>Email</th><th>Password</th>
  <?php 
  while($res=mysql_fetch_assoc($r))
  {     
       echo "<tr><td> " .$i. " </td><td> " .$res['full name']. " </td><td> " .$res['mobile']. " </td><td> " .$res['email']. " </td><td> " .$res['password']. " </td><td> <a style='text-decoration:none;color:red;' href='dele.php?re=".$res["UID"]."'>Delete</a> </td></tr> ";
	   $i=$i+1;
  }
  ?>
   </table>
   </table>
  <table border='1' id="s" style="display:none;cursor:text;">
  <th>No</th><th>SongName</th><th>Artist</th><th>Album</th>
<?php 
  $i1=1;
  $s1="select * from 1418bece30030_songs";
  $r1=mysql_query($s1);
  
  while($re=mysql_fetch_assoc($r1))
  {     
       echo "<tr><td>".$i1."</td><td>".$re['songname']."</td><td>".$re['artist']."</td><td>".$re['album']."</td><td> <a style='text-decoration:none;color:red;' href='delet.php?rer=".$re["sid"]."'>Delete</a> </td></tr>";
	   $i1=$i1+1;
  }
?>  
   </table>
</div>
</div>
</form>
<script src="jscript/j.js"></script>
</body>
</html>