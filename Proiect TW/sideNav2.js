function openNav1() {
  document.getElementById("mySidenav1").style.width = "200px";
}

function closeNav1() {
   document.getElementById("mySidenav1").style.width = "0px";
}

function show_alert()
{
	if(confirm("Nu puteti accesa aceasta informatie fara a fi logat!")){window.location.href="register.html";} 
}