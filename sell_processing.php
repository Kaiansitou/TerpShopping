<?php

require_once("support.php");

session_start();

$host = "localhost";
$user = "dbuser";
$password = "goodbyeWorld";
$database = "terpshopping";
$table = "items";
$id =0;
$db = connectToDB($host, $user, $password, $database);
    

    $_SESSION['brand'] = trim($_POST["brand"]);
    $_SESSION['model'] = trim($_POST["model"]);
    $_SESSION['photo'] = trim($_POST["photo"]);
    $_SESSION['time'] = trim($_POST["time"]);
    $_SESSION['price']= trim($_POST["price"]);
    $_SESSION['name']= trim($_POST["name"]);

    $brand = $_SESSION['brand'];
    $model = $_SESSION['model'];
    $photo= $_SESSION["photo"];
    $time = $_SESSION['time'];
    $price = $_SESSION['price'];
    $name = $_SESSION['name'];


    $selectQuery = sprintf("select * from %s", $table);
    $info=mysqli_query($db, $selectQuery);
    if ($info) {
        $selectQuery2=sprintf("select * from %s order by id DESC limit 1", $table);
        $info2=mysqli_query($db, $selectQuery2);
        $recordArray = mysqli_fetch_array($info2, MYSQLI_ASSOC);
        $id= $recordArray['id']+1;
    }else {
        $body = "Item information load failed.".mysqli_error($db);
    }

    $sqlQuery = sprintf("insert into $table (id, username, brand, model, photo, time, price) 
                          values ('%d','%s','%s', '%s', '%s', '%s', '%s')", $id, $name, $brand, $model, $photo, $time, $price);
    $result = mysqli_query($db, $sqlQuery);

    if ($result) {
        header("Location:afterSell.php");
    } else {
        $output = "Your item is listed failed.".mysqli_error($db);
    }

    mysqli_close($db);

    echo generatePage("$output");
?>