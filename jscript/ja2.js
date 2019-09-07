function validate2()
{  var x=/^[a-z A-Z 0-9 . _]+(\@[a-z A-Z 0-9]{1,8})+(\.[a-z A-Z]{2,4})$/;
   var y=/^([0-9]{10})$/;
	var z=/^([a-z A-Z 0-9]{6,20})$/;
	var n = document.getElementById("emal").value;
	var p = document.getElementById("pwrd").value;
	var cp = document.getElementById("cpwrd").value;
	var r = document.getElementById("fn").value;
	var t = document.getElementById("mn").value;
	var flag=0;
	var msg=" ";
   if(n=="")
   {
	  msg+="\nEmail ";
      document.getElementById("emal").style.borderColor="red"; 	  
	  flag=1;
	   
   }
   else
   { 
      document.getElementById("emal").style.borderColor="grey";
      document.getElementById("emal").placeholder="Email"; 
   }
   
   
   if(p=="")
   {
	  msg+="\npassword ";
      document.getElementById("pwrd").style.borderColor="red";	  
	   flag=1;
   }
   else{document.getElementById("pwrd").style.borderColor="grey";}
   
   if(cp=="")
   {
	  msg+="\nConfirm password ";
      document.getElementById("cpwrd").style.borderColor="red";	  
	   flag=1;
   }
   else{document.getElementById("cpwrd").style.borderColor="grey";}
   
   
   if(r=="")
   {
	  msg+="\nfull name ";
      document.getElementById("fn").style.borderColor="red";	  
	   flag=1;
   }
    else{document.getElementById("fn").style.borderColor="grey";}
	
	
  
   
   
   if(t=="")
   {
	  msg+="\nmobile number "; 
	  document.getElementById("mn").style.borderColor="red";
	   flag=1;
   }
   
   else
   {
	   document.getElementById("mn").style.borderColor="grey";
	   document.getElementById("mn").placeholder="Mobile number";
	}
   
    if(x.test(n)==false && n!="")
	{
	   msg+="\n valid email address";
	   
	   document.getElementById("emal").style.borderColor="red";	   
	   document.getElementById("emal").placeholder="email of type 'frank@gmail.com' only ";
	   flag=1;
   } 
   
   
   
   if(y.test(t)==false && t!="")
	{
	   msg+="\n valid mobile number";
	   document.getElementById("mn").style.borderColor="red";
	   document.getElementById("mn").placeholder="only numbers allowed or length must be 10";
	   flag=1;
   } 
   
   if(cp!=p && cp!="")
	{
	   msg+="\n Confirm password don't match";
       document.getElementById("cpwrd").style.borderColor="red";
       flag=1;
	}
	if(z.test(p)==false && p!="")
	{
	   msg+="\n Password length must be atleast 6";
	   document.getElementById("pwrd").style.borderColor="red";
	   
	   flag=1;
   } 
   if(flag==1)
   {
	  alert("please enter :" + msg);	  
	  return false;
   }
  
}
