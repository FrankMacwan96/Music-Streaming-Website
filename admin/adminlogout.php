<?php
session_start();
   unset($_SESSION["user"]);
   unset($_SESSION["pwrd"]);
   header('Location:adminlog.php')
?>