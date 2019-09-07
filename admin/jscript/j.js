function change(id){ 
		if(id=='u'){
			document.getElementById("1").style.color = "#1E90FF";
			document.getElementById("2").style.color = "white";
			document.getElementById("u").style.display = "block";
			document.getElementById("s").style.display = "none";
		}
		if(id=='s'){
			document.getElementById("1").style.color = "white";
			document.getElementById("2").style.color = "#1E90FF";
			document.getElementById("u").style.display = "none";
			document.getElementById("s").style.display = "block";
		}
}	
		