<?php
 if($_POST["n"]!=""&&$_POST["q"]!=""&&$_POST["w"]!=""&&$_POST["e"]!="")
	 { 
 $x=mysql_connect("localhost","root","");
 mysql_select_db("1418bece30030",$x);
 mysql_query(" INSERT INTO `1418bece30030`.`1418bece30030_feedback` (`Name`, `Mobile`, `Email`, `Message`) VALUES ('".$_POST["n"]."','".$_POST["q"]."','".$_POST["w"]."','".$_POST["e"]."')");
 echo "<script>window.alert('Thank you for your feedback'); window.location.href='aboutus.php';</script>";
}
 
else{ 
 echo "<script>window.alert('Every fields are compulsory,please fill them'); window.location.href='aboutus.php';</script>";	
}
 ?>
 