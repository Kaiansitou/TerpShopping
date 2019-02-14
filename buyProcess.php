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

    <input type="reset" name="clear" value="Clear all" style='position: relative;
    left: 28em' onclick="window.location.href='list.php'">
    <input type="submit" name="back" value="Go back" style='position: relative;
    left: 44em;top:0.3em' onclick="window.location.href='afterSignin.php'">
    <hr style='position:relative;top:0.3em'>
    <hr style='position:relative;top:0.3em'><br>

<?php

require_once("support.php");
session_start(); 

$host = "localhost";
$user = "dbuser";
$password = "goodbyeWorld";
$database = "terpshopping";
$table = "items";
$db = connectToDB($host, $user, $password, $database);
$sqlQuery = sprintf("select * from %s", $table);
$result = mysqli_query($db, $sqlQuery);
$current=array();

$_SESSION["uid"]=$_POST["candy"];
$uid=$_SESSION["uid"];
$str = "";
$x = 0;

if ($result) {
    $numberOfRows = mysqli_num_rows($result);
    if ($numberOfRows == 0) {
       $str .= "<h3>No items in the shopping cart</h3>";
    } else {
		$str .= <<< ABC
		<form action="checkout.php" method="post">
ABC;
        $str .= "<fieldset>";
        $str .= "<table align='left'><tbody>";

        while ($recordArray = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $id=$recordArray['id'];
            $username = $recordArray['username'];
            $brand = $recordArray['brand'];
            $model = $recordArray['model'];
            $photo = $recordArray['photo'];
            $time= $recordArray['time'];
            $price= $recordArray['price'];
			foreach ($uid as $value) {
				if ($value == $id) {
					$x = 1;
					break;
				}
			}
			if ($x == 1) {
            $str .=  "Item id: $id<br>"."<br>";
            $str .=  "Item: $brand $model"."<br><br>";
            $str .=  "Time of Used: $time"."<br><br>";
            $str .=  "Price: \$$price"."<br><br>";
            $str .=  "Seller Name: $username"."<br><br><br>";
			}
			$x= 0;
        }	
    }
	
	$str .= <<< BOB
	
	</tbody></table>
    </fieldset>
    <h3><input type="submit" name="submitButton" value="Purchase" style='position:relative;left:25em;top:0em;color:white;font-size:0.33em'></h3>
    </form>	
BOB;
	
}  else {
    $body = "Item information load failed.".mysqli_error($db);
}
echo $str;

?>
    
</body>
</html>
