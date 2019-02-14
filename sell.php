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
            <input type="submit" name="backButton" value="Go Back" style='position: relative;left: 38em; top:0em' onclick="window.location.href='afterSignin.php'"> &nbsp;&nbsp;&nbsp;&nbsp;
        <hr><hr><br>
        <form action="sell_processing.php" method="post">

        <fieldset>
            <h2 style='position: relative;left: 2.8em'>Phone Information</h2>
            <input type="text" name="brand" style="width: 17.5em;  position: relative; left: 65px" placeholder="Phone Brand" required/><br><br>
            <input type="text" name="model" style="width: 17.5em;  position: relative; left: 65px" placeholder="Phone Model" required/><br><br>
            <b style="width: 17.5em;  position: relative; left: 65px">Image to upload:</b><br><br>
            <input type="file" name="photo" style="width: 17.5em;  position: relative; left: 65px"><br />
        <p style='position:relative;left: 4em'>
            <b>Used for: </b><br>
            New<input type="radio" name="time" value="New" style='position:relative;left: 1em'><br>
            Within a month<input type="radio" name="time" value="Within 1 month" style='position:relative;left: 1em'><br>
            Within three month<input type="radio" name="time" value="Within 3 month" style='position:relative;left: 1em'><br>
            Within half year<input type="radio" name="time" value="Within half year" style='position:relative;left: 1em'><br>
            Within one year<input type="radio" name="time" value="Within 1 year" style='position:relative;left: 1em'><br>
            More than one year<input type="radio" name="time" value="More than 1 year" style='position:relative;left: 1em'><br><br>
            <input type="number" name="price" style="width: 17.5em;  position: relative; left: 2px" placeholder="Phone Price"/><br><br>
            <input type="text" name="name" placeholder="UserName" style="width: 17.5em;  position: relative; left: 2px"><br><br>
            <input type="reset" name="clearButton" value="Clear" style='position: relative;left: 1em; top:-0.5em'> &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="submitButton" value="List Item" style='position:relative;left: 2em; top:-0.5em'>&nbsp;&nbsp;&nbsp;&nbsp;
        </p>
        </fieldset>
        </form>
    </body>
</html>

<?php
    require_once("support.php");

    session_start();

    if(isset($_POST["submitButton"])){
        header("Location:sell_processing.php");
    }
?>