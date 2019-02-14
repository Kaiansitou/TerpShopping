<html>
    <head>
        <meta charset="UTF-8" />
        <title>Group Project </title>
        <link rel="stylesheet" href="terpShopping.css" />
        <script src="error.js"></script> 

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
    <b>Sign Up<b><br><br>
    </div>
    <p>
    <form action="processNewUser.php" method="post">
    <input type="text" name="username" style="width:20em; position: relative;
    left: 50px" placeholder="Username"><br><br>
    <input type="email" name="email" style="width:20em; position: relative;
    left: 50px" placeholder="Email"><br><br>
    <input type="password" name="password" id="password" style="width:20em; position: relative; left: 50px" placeholder="Password" required><br><br>
    <input type="password" name="repeatPassword" id="repeatPassword" style="width:20em; position: relative; left: 50px" placeholder="Repeat Password" required><br><br>
    <input type="submit" name="signup" value="Sign Up" style="position:relative;left:70px">
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

    if(isset($_POST["signup"])){
        header("Location:processNewUser.php");
    } 

?>