<html>
<head>
<link rel="stylesheet" type="text/css" href="css/home.css">
<div><img src="images/mslogo.gif" width="150" height="75" alt="logo" >
<?php
      session_start(); 
	   
     if(isset($_SESSION["name"]))
	 {                                   	 
       
     echo "<form method='post' action='s.php' style='float:right;'><input type='submit' class='btn' value='".$_SESSION["name"]."' ></form>";
	 }
	 else{
	echo "<form method='post' action='login.php' style='float:right;'><input type='submit' class='btn' value='Login'></form>";
	 }
	 
	 ?>
<input type="button" class="btn" value="SignUp" onclick="window.location.href='signup.php'">

<input type="button" class="btn" value="AdminLogin" onclick="window.location.href='admin/adminlog.php'"> 
</div>


<ul>
  <li><a class="active" href="home.php">Home</a></li>
  
  <li class="dropdown">
    <a href="#" class="dropbtn">Category</a>
    <div class="dropdown-content">
      <a href="songs.php">Rock</a>
	  <a href="songs(edm).php">EDM</a>
	  
	  
    </div>
	
  </li>
  <li><a class="active" href="aboutus.php">About Us</a></li>
      <li>  
	  <?php
      
	   
     if(isset($_SESSION["name"]))
	 {                                   	 
         echo "<a class='active' href='playlist.php'>My Playlist</a>";     
     } 
?>
   </li>
	  <li><input type="text" name="text" placeholder="search" >
	  </li>
</ul>
</head>

<body style="background-image:url(images/img.jpg);background-position:center;background-repeat:no-repeat;background-size:100%;">
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '163955214150693',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<p style="color:white;font-family:arial;font-size:50px;padding:150px;text-align:center;text-shadow:3px 3px 4px black;cursor:context-menu;">Music For Everyone.</p> 

<body>
</html>
