<html>
    <head>
        <meta charset="UTF-8" />
        <title>Group Project </title>
        <link rel="stylesheet" href="terpShopping.css" />
    </head>

    <body background = "2.jpg">
    <img src="umcp.png" name="umcp" style='width: 5em;position: relative; left: 200px;top:60px'>
    <h1>Phone Shopping</h1>
    <img src="umcp.png" name="umcp" style='width: 5em;position: relative; left: 870px;top:60px'>
    <hr><hr>
     <form action="terpShopping.html" method="post">
    <input type="submit" name="back" value="Back" style="position:relative;left: 40em">
    <hr><hr><br><br><br>
    </form>

    <fieldset>
    <div>
    <b>Login<b><br><br>
    </div>
    <p>
    <form action="processSignin.php" method="post">
    <input type="text" name="username" style="width: 20em;  position: relative;
    left: 45px;" placeholder="Username" required><br><br>
    <input type="password" name="password" style="width: 20em;  position: relative;
    left: 45px;" placeholder="Password" required><br><br>
    <input type="submit" name="login" value="Login" style="position:relative;left:60px">
    <input type="reset" name="reset" value="Clear" style="position:relative;left:120px">
    </form>
    </p>
    </fieldset>
    </form>
    </body>
</html>

<?php

    require_once("support.php");

    session_start();

 
    if(isset($_POST["back"])){
        header("Location:terpShopping.html");
    }
    if(isset($_POST["login"])){
        header("Location:processSignin.php");
    }

?>