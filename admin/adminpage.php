<?php 
  session_start(); 
  if(isset($_POST))
  $u=$_POST['uname'];
  $p=$_POST['password'];
  $_SESSION["user"]=$u;  
  $_SESSION["pwrd"]=$p;  
	
  $c=mysql_connect("localhost","root","");
  $m=mysql_select_db("1418BECE30030",$c);
  $s="select * from 1418BECE30030_admin";
  $r=mysql_query($s);
  
  
  while($res=mysql_fetch_assoc($r))
  {
	  $f=$res["uname"];
	  $g=$res["pword"];
  }	  
  
  if($u==$f&&$p==$g)
  { header('Location: admpg.php');   
  }	
  else
  {   
      echo '<script type="text/javascript">window.alert("Incorrect username or password");window.location.href = "adminlog.php";</script>';
	  exit;
  }	  
?>  