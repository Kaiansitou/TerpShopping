"use strict";

window.onsubmit = main;

main();

function main(){
	var error = "";
	var password = document.getElementById("password").value;
	var repeatPassword = document.getElementById("repeatPassword").value;

	if(password.length != repeatPassword.length){
		error += "Invalid Password\n";
	}

	return print(error);
}

function print(message){
	if(message !=""){
		alert(message);
		return false;
	}
}