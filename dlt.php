<?php
   session_start();
if(isset($_GET["delete"])&&$_GET["delete"]!="")
   $c=mysql_connect("localhost","root","");
   $m=mysql_select_db("1418BECE30030",$c);	
    
	mysql_query("DELETE FROM `1418bece30030_playlist` WHERE `no` LIKE '%".$_GET["delete"]."'");
	header("Location:playlist.php");
	
?>	
	