<?php 
  session_start(); 
  if(isset($_POST))
  $u=$_POST["Email1"];
  $p=$_POST["password1"];
  $_SESSION["eml"]=$u;  
  $_SESSION["pwd"]=$p; 
  
	
  $c=mysql_connect("localhost","root","");
  $m=mysql_select_db("1418bece30030",$c);
  $s="select * from 1418bece30030_user";
  $r=mysql_query($s);

  
  while($res=mysql_fetch_assoc($r))
  {
	  $f=$res["email"];
	  $g=$res["password"];
  	  if($f==$u && $g==$p)
	  {  $flag=1;  $_SESSION["name"]=$res["full name"];   }
      else
	  {   $flag=0;       }		  
  }
  if($flag==1)
  { header('Location: home.php');   
  }	
  
  else
  {   
      echo '<script type="text/javascript">window.alert("Incorrect Email or password");window.location.href = "login.php";</script>';
	  exit;
  }	  
?>  