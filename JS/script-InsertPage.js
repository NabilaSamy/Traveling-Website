function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft= "0";
}

function validation() {
	var username = document.forms["InsertForm"]["username"].value;
	if(username == "") {
		alert("Username must not be empty!");
		return false;
	}
	
	var travelstart = document.forms["InsertForm"]["travelstart"].value;
	if(travelstart == "") {
		alert("Travel Start must not be empty!");
		return false;
	}
	
	var travelend = document.forms["InsertForm"]["travelend"].value;
	if(travelend == "") {
		alert("Travel End must not be empty!");
		return false;
	}
	
	var traveltransport = document.forms["InsertForm"]["traveltransport"].value;
	if(traveltransport == "") {
		alert("Travel Transport must not be empty!");
		return false;
	}
	
	var traveldate = document.forms["InsertForm"]["traveldate"].value;
	if(traveldate == "") {
		alert("Travel Date must not be empty!");
		return false;
	}
	
	var traveltime = document.forms["InsertForm"]["traveltime"].value;
	if(traveltime == "") {
		alert("Travel Time must not be empty!");
		return false;
	}
}
