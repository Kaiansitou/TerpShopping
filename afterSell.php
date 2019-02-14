<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Group Project </title>
        <link rel="stylesheet" href="terpShopping.css" />

    </head>

    <body background = "2.jpg">
    <img src="umcp.png" name="umcp" style='width: 5em;position: relative; left: 290px;top:60px'>
    <h1>Confirm Page</h1>
    <img src="umcp.png" name="umcp" style='width: 5em;position: relative; left: 870px;top:60px'>
    <hr><hr>
    <form method="post">
    <input type="submit" name="correct" value="Information Correct" style='position:relation;left:35em'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </form>
    <hr><hr><br>
    <fieldset style='position: relative;left: 30em'>
        <h2 style='position: relative;left: 2.8em'>Confirm Information</h2>
    <?php
    	require_once("support.php");

    	session_start();

    	$body = "<p style='position: relative;left: 4.5em'>";
    	$body.= "Seller Name: ".$_SESSION['username']."<br><br>";
    	$body.= "Phone Brand: ".$_SESSION['brand']."<br><br>";
    	$body.= "Phone Model: ".$_SESSION['model']."<br><br>";
    	$body.= "Used Time: ".$_SESSION['time']."<br><br>";
    	$body.= "Phone Price: ".$_SESSION['price']."<br><br>";
    	$body.= "</p>";

    	if(isset($_POST["correct"])){
    		header("Location:confirm.php");
		}

		if(isset($_POST["error"])){
			header("Location: sell.php");
		}

		echo generatePage("$body");
?>
	</fieldset>

    </body>
</html>
