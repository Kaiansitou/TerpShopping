<?php

	require_once("support.php");

	session_start();

	if(isset($_POST["signIn"])){
		header("Location:signIn.php");
	}
	if(isset($_POST["newUser"])){
		header("Location:newUser.php");
	}
	if(isset($_POST["contact"])){
		header("Location:contact.php");
	}
	if(isset($_POST["logout"])){
		header("Location:terpShopping.html");
	}
?>