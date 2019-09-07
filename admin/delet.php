<?php
   $c=mysql_connect("localhost","root","");
   $m=mysql_select_db("1418BECE30030",$c);
   $emm=$_GET["rer"];
   $s="DELETE from 1418BECE30030_songs WHERE sID=".$emm."";
   $r=mysql_query($s);
   header('Location: admpg.php');   
?>