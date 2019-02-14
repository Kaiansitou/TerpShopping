<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Seller Page </title>
        <link rel="stylesheet" href="terpShopping.css" />
    </head>

    <body background = "2.jpg">
        <img src="umcp.png" name="umcp" style='width: 5em;position: relative; left: 290px;top:60px'>
        <h1 style = "float: right;margin-right: 4.8em;">Selling items</h1>
        <img src="umcp.png" name="umcp" style='width: 5em;position: relative; left: 870px;top:60px'>
        <hr><hr>
            <input type="submit" name="continue" value="Continue" style='position: relative;left: 40em; top:0em' onclick="window.location.href='afterSignin.php'"> &nbsp;&nbsp;&nbsp;&nbsp;
        <hr><hr><br>
    </body>
</html>

<?php
	require_once("support.php");

	session_start();
    $body="<fieldset style='width:22em'>";
    $body.="<p style='color:white'>";
	$body.="<h2 style='position:relative;left:0.5em'>Your item is now listed for sale.</h2>"."<br>";
    $body.= "<p style='position:relative;left:6em'>"."Seller Name: ".$_SESSION['username']."<br></p>";
    $body.= "<p style='position:relative;left:6em'>"."Phone Brand: ".$_SESSION['brand']."<br></p>";
    $body.= "<p style='position:relative;left:6em'>"."Phone Model: ".$_SESSION['model']."<br></p>";
    $body.= "<p style='position:relative;left:6em'>"."Used Time: ".$_SESSION['time']."<br></p>";
    $body.= "<p style='position:relative;left:6em'>"."Phone Price: ".$_SESSION['price']."<br></p>";
    $body.="</p>";
    $body.="</fieldset>";

	echo generatePage("$body");
	
?>