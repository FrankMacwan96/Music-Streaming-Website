<?php
session_start();
if(isset($_POST))
$f=$_POST['fna'];
$m=$_POST['mobile'];
$e=$_POST['email'];
$p=$_POST['password'];
$_SESSION["fn"]=$f;
$_SESSION["mobile"]=$m;
$_SESSION["email"]=$e;

$c=mysql_connect("localhost","root","");


	$q=mysql_select_db('1418bece30030',$c);
	
	$u="INSERT INTO `1418bece30030`.`1418bece30030_user` (`full name`, `email`, `mobile`, `password`) VALUES ('$f', '$e', '$m', '$p')";
	
	$r=mysql_query($u);
	 
    header('Location: tha.php'); 
?>