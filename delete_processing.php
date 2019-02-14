<?php
require_once("support.php");

$host = "localhost";
$user = "dbuser";
$password = "goodbyeWorld";
$database = "terpshopping";
$table = "items";
$db = connectToDB($host, $user, $password, $database);

if(isset($_POST["manager"]) && isset($_POST["password"])){
    if(trim($_POST["manager"])=="admin" &&  trim($_POST["password"])=="terps"){
        if(isset($_POST["deleteAll"])) {
            $deleteQuery = sprintf("delete from %s", $table);
            $result=mysqli_query($db, $deleteQuery);
            $selectQuery= sprintf("select * from %s", $table);
            $info=mysqli_query($db, $selectQuery);
            if(($numberOfRows = mysqli_num_rows($info))==0){
                $output="All items are clear from store.";
            }else{
                $output="Clear store failed.";
            }
        }else if(isset($_POST["deleteOne"])){
            $id=$_POST["id"];
            $deleteQuery = sprintf("delete from %s where id = %s", $table, $id);
            $result=mysqli_query($db, $deleteQuery);
            $selectQuery= sprintf("select * from %s", $table);
            $info=mysqli_query($db, $selectQuery);
            if(mysqli_num_rows($result)>0 || mysqli_num_rows($info)==0){
                $output="Selected items are clear from store.";
            }else{
                $output="Selected items are clear from store.";
            }
        }
    }else{
    $output="<h2 >You are not manager, cannot make change to database!";
}
}else{
    $output="Please enter username or password!";
}


$body= <<<EOBODY
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Group Project </title>
        <link rel="stylesheet" href="terpShopping.css" >
    </head>

    <body background = "2.jpg">
    <img src="umcp.png" name="umcp" style='width: 5em;position: relative; left: 260px;top:60px'>
    <h1>Delete Confirm </h1>
    <img src="umcp.png" name="umcp" style='width: 5em;position: relative; left: 870px;top:60px'>
<hr><hr>
<button type = "submit" value = "Continue" style='position:relative; left:30em;background-color: Transparent;border: none;color:white;font-size: 1em;text-shadow:8px 8px 8px #666' onclick="window.location.href='delete.php'">Continue</button>
<button type = "submit" value = "Go back" style='position:relative; left:38em;background-color: Transparent;border: none;
color:white;font-size: 1em;text-shadow: 8px 8px 8px #666' onclick="window.location.href='afterSignin.php'">Go back to Store</button><br>
<hr><hr><br>
<fieldset>
<h2><p style='color:white;positon:relative;left:0.5em'>$output</p></h2>
</fieldset>
</body>
EOBODY;

$page = generatePage($body);
echo $page;

?>