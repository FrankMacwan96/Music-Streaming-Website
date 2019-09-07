<?php
    session_start();
    unset($_SESSION["name"]);
	unset($_SESSION["eml"]);
	unset($_SESSION["pwd"]);
	header("Location:home.php");
?>	
	
	