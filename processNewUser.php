<?php

	require_once("support.php");

	session_start();

	//insert DB
	$host = "localhost";
	$user = "dbuser";
	$password = "goodbyeWorld";
	$database = "terpshopping";
	$table = "accounts";
	$db = connectToDB($host, $user, $password, $database);

    $_SESSION['username']=trim($_POST["username"]);
    $_SESSION['email']=trim($_POST["email"]);
    $_SESSION['password']=trim($_POST["password"]);
    $_SESSION['repeatPassword']=trim($_POST["repeatPassword"]);

	$username = trim($_SESSION["username"]);
	$email = trim($_SESSION["email"]);
	$password = trim($_SESSION["password"]);
	$repeatPassword = trim($_SESSION["repeatPassword"]);
	$password = md5($password);

	$sqlQuery = sprintf("insert into $table (username, email, password) values ('%s', '%s', '%s')", $username, $email, $password);
	$result = mysqli_query($db, $sqlQuery);

	if ($result) {
		header("Location:afterNewUser.php");
	} else { 				   
		$body = "Inserting records failed.".mysqli_error($db);
	}
		
	/* Closing */
	mysqli_close($db);

	echo generatePage($body);
?>