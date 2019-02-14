<?php
	
	require_once("support.php");

	session_start();

	$host = "localhost";
	$user = "dbuser";
	$password = "goodbyeWorld";
	$database = "terpshopping";
	$table = "accounts";
	$db = connectToDB($host, $user, $password, $database);

    $_SESSION['username']=trim($_POST["username"]);
    $_SESSION['password']=trim($_POST["password"]);

	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	$password = md5($password);
	
	$sqlQuery = sprintf("select * from $table where username='%s' and password = '%s'",$username, $password);
	$result = mysqli_query($db, $sqlQuery);

	if ($result) {
		$numberOfRows = mysqli_num_rows($result);
 	 	if ($numberOfRows == 0) {
			$body = "No entry exists in the database for the specified email and password";
		} else {
			while ($recordArray = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		     	$username = $recordArray['username'];
				$password = $recordArray['password'];
				header("Location:afterSignin.php");
     		}
		}
		mysqli_free_result($result);
	}  else {
		$body = "Retrieving records failed.".mysqli_error($db);
	}
		
	/* Closing */
	mysqli_close($db);

	echo generatePage($body);
?>