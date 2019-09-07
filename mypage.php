<?php
  $c=mysql_connect("localhost","root","");
  $m=mysql_select_db("frank",$c);
  $s="select * from user";
  $r=mysql_query($s);
  $i=1;
  $res=mysql_fetch_assoc($r);
  if($res['full name']=="")
  { echo "no users";
     
  }
?>  
  

  <html>
  <head><h1><Modules</h1></head>
  <body>
  
   
  <a href="#" id="1" onclick="javascript:change('u');" style="text-decoration:none;color:blue;">user</td></span><td> <a href="#" onclick="javascript:change('s');" id="2" style="text-decoration:none;color:black;">songs</span>
  
  
  <div>
  <table border='1' id="u" style="cursor:text;">
  <th>No</th><th>Name</th><th>mobile no</th><th>Email</th><th>password</th>
  <?php 
  while($res=mysql_fetch_assoc($r))
  {     
       echo "<tr><td>".$i."</td><td>".$res['full name']."</td><td>".$res['mobile']."</td><td>".$res['email']."</td><td>".$res['password']."</td></tr>";
	   $i=$i+1;
  }
  ?>
   </table>
  <table border='1' id="s" style="display:none;cursor:text;">
  <th>No</th><th>SongName</th><th>Artist</th><th>Album</th>
<?php 
  $i1=1;
  $s1="select * from songs";
  $r1=mysql_query($s1);
  
  while($re=mysql_fetch_assoc($r1))
  {     
       echo "<tr><td>".$i1."</td><td>".$re['songname']."</td><td>".$re['artist']."</td><td>".$re['album']."</td></tr>";
	   $i1=$i1+1;
  }
?>  
   </table>
   </div>
   <script src="jscript/j.js"></script>
 </body>
</html> 
