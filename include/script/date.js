var date = document.getElementById("datum");
var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

function interval(){
	var d = new Date();
	date.innerText = d.getDate() + " " + months[d.getMonth()] + " " + d.getFullYear() + ", " + d.toLocaleTimeString();
	setTimeout(interval, 1000);
}

interval();