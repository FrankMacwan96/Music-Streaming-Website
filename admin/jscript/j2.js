function validate3()
{  
    
	var n = document.getElementById("email").value;
	var p = document.getElementById("pwrd").value;
	var flag=0;
	var msg=" ";
   if(n=="")
   {
	  msg+="\nusername ";
      document.getElementById("email").style.borderColor="red"; 	  
	  flag=1;
	   
   }
   else
   {  
     document.getElementById("email").style.borderColor="grey";
	 
   }
   
   
   if(p=="")
   {
	  msg+="\npassword "; 
	  document.getElementById("pwrd").style.borderColor="red";
	   flag=1;
   }
   else{document.getElementById("pwrd").style.borderColor="grey";}
   
   
   
   if(flag==1)
   {
	  alert("Please enter" + msg);	  
	  return false;
   }
  
}
