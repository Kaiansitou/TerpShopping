<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Seller Page </title>
    <link rel="stylesheet" href="terpShopping.css" />
</head>


<body background = "2.jpg">
<img src="umcp.png" name="umcp" style='width: 5em;position: relative; left: 200px;top:60px'>
<h1 style='position:relative;left:-0.7em'>Merchandise</h1>
<img src="umcp.png" name="umcp" style='width: 5em;position: relative; left: 870px;top:60px'>
<hr><hr>

    <input type="submit" name="back" value="Go back" style='position: relative;
    left: 38em;top:0.3em' onclick="window.location.href='afterSignin.php'">
    <hr style='position:relative;top:0.3em'>
    <hr style='position:relative;top:0.3em'><br>




<?php 

require_once("support.php");
session_start();  
$uid =$_SESSION["uid"];
	echo "<p><h1>Congratulations! </h1></p>";

	echo "<h2 style='color:white;position:relative;left:19em;top:9em'>You have successfully placed the order, and the items will be delivered.</h2>";

$host = "localhost";
$user = "dbuser";
$password = "goodbyeWorld";
$database = "terpshopping";
$table = "items";
$db = connectToDB($host, $user, $password, $database);

	foreach ($uid as $id) {
            $deleteQuery = sprintf("delete from %s where id = %s", $table, $id);
            $result=mysqli_query($db, $deleteQuery);
            if($result){
                $output="Selected items are clear from store.";
            }else{
                $output="Delete selected item failed.";
            }
	}
?>
   
</body>
</html>
