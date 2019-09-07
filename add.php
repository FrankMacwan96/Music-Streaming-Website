<?php
   session_start();
   $c=mysql_connect("localhost","root","");
   $m=mysql_select_db("1418bece30030",$c);
   if(isset($_SESSION["name"]))
   {
	   $q=$_SESSION["name"];
       $sql="SELECT * FROM `1418bece30030_user` WHERE `full name` LIKE '%".$q."'";
       $r1=mysql_query($sql);
       $res=mysql_fetch_assoc($r1);
	   $id=$res["UID"];
    
   if(isset($_GET['idd']) && !empty($_GET['idd'])){
	 $u=$_GET['idd'];
	 
	 $sq="INSERT INTO `1418bece30030`.`1418bece30030_playlist` (`uID`, `sID`) VALUES ('$id', '$u')";
	 $w=mysql_query($sq);
	 echo "<script type='text/javascript'>window.alert('Added to playlist');window.location.href ='".$_GET['curl']."';</script>";
	 
   }
   }
   else
   {
	    echo "<script type='text/javascript'>window.alert('Please login to creat your playlist');window.location.href ='".$_GET['curl']."';</script>";
	    
   }
   
	?>