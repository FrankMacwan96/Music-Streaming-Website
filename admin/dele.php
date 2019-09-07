<?php
   $c=mysql_connect("localhost","root","");
   $m=mysql_select_db("1418BECE30030",$c);
   $em=$_GET["re"];
   $s="DELETE from 1418BECE30030_user WHERE email=".$em."";
   $r=mysql_query($s);
   header('Location: admpg.php');   
?>