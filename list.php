<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Seller Page </title>
    <link rel="stylesheet" href="terpShopping.css" />
</head>

<body background = "2.jpg">
<img src="umcp.png" name="umcp" style='width: 5em;position: relative; left: 290px;top:60px'>
<h1 style='position:relative;left:-0.2em'>Merchandise</h1>
<img src="umcp.png" name="umcp" style='width: 5em;position: relative; left: 870px;top:60px'>
<hr style='position:relative;left:0em;top:0em'>
<hr style='position:relative;left:0em;top:0em'>
    <input type="reset" name="clear" value="Clear all" style='position: relative;
    left: 28em' onclick="window.location.href='list.php'">
    <input type="submit" name="back" value="Go back" style='position: relative;
    left: 44em;top:0.3em' onclick="window.location.href='afterSignin.php'">
    <hr style='position:relative;top:0.3em'>
    <hr style='position:relative;top:0.3em'><br>

<?php

require_once("support.php");
$host = "localhost";
$user = "dbuser";
$password = "goodbyeWorld";
$database = "terpshopping";
$table = "items";
$db = connectToDB($host, $user, $password, $database);
$sqlQuery = sprintf("select * from %s", $table);
$result = mysqli_query($db, $sqlQuery);

$str = "";


if ($result) {
    $numberOfRows = mysqli_num_rows($result);
    if ($numberOfRows == 0) {
       $str .= "<h3 style='position:relative;left:5em'>No items in the store</h3>";
    } else {
		$str .= <<< ABC
		<form action="buyProcess.php" method="post">
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
            $image_name=$recordArray["photo"];
            $file="http://localhost/cmsc389n/Project/GroupProject/";
            $dir=$file.$image_name;

            $str .= <<< ECNO
            <input type="checkbox" name="candy[]" value="$id" style='position: relative;left: 5.5em'><p style='position: relative;left:6em;top:-2.2em'>select this item</p>
ECNO;
            $str .= "<p style='position: relative;left: 4em'>";
            $str .= "Item id: $id"."<br><br>";
    
            $str .= "<img src=".$dir." width=200 height=250\><br><br>";
            $str .= "Item: $brand $model"."<br>";
            $str .= "Time of Used: $time"."<br>";
            $str .= "Price: \$$price"."<br>";
            $str .= "Seller Name: $username"."<br><br>";
            $str .= "</p>";
            
        }
    }
	$str .= <<< BOB
	
	</tbody></table>
    </fieldset>
	<h3><input type="submit" name="submitButton" value="Purchase" style='position:relative;left:25em;top:0em;color:white;font-size:0.33em'></h3>
	</form>	
BOB;
	
    mysqli_free_result($result);
}  else {
    $body = "Item information load failed.".mysqli_error($db);
}
		echo "{$str}";
?>
    
</body>
</html>