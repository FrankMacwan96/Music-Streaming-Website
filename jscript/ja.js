function validate()
{   var s=/^[a-z A-Z 0-9 . _]+(\@[a-z A-Z 0-9]{1,8})+(\.[a-z A-Z]{2,4})$/;
    
	var n = document.getElementById("eml").value;
	var p = document.getElementById("pwd").value;
	var flag=0;
	var msg=" ";
   if(n=="")
   {
	  msg+="\nEmail ";
      document.getElementById("eml").style.borderColor="red"; 	  
	  flag=1;
	   
   }
   else
   {  
     document.getElementById("eml").style.borderColor="grey";
	 document.getElementById("eml").placeholder="Email";
   }
   
   
   if(p=="")
   {
	  msg+="\npassword "; 
	  document.getElementById("pwd").style.borderColor="red";
	   flag=1;
   }
   else{document.getElementById("pwd").style.borderColor="grey";}
   
   
   
   if(flag==1)
   {
	  alert("Please enter" + msg);	  
	  return false;
   }
  
}
