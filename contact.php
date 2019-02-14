<html>
    <head>
        <meta charset="UTF-8" />
        <title>Group Project </title>
        <link rel="stylesheet" href="terpShopping.css" />
    </head>

    <body background = "2.jpg">
    <img src="umcp.png" name="umcp" style='width: 5em;position: relative; left: 200px;top:60px'>
    <h1>Phone Shopping </h1>
    <img src="umcp.png" name="umcp" style='width: 5em;position: relative; left: 870px;top:60px'>
    <hr><hr>
   <form action="terpShopping.html" method="post">
    <input type="submit" name="back" value="Back" style="position:relative;left: 40em">
    <hr><hr>
    </form>
    </body>
</html>

<?php

	require_once("support.php");

	session_start();

	$body=<<<EOBODY
        <p style='color:white;font-size:3em;position:relative;left:450px'>Contact Information</p>
        <p style='color:white;font-size:2em;position:relative;left:520px'>Name: Kaian Sitou</p>
        <p style='color:white;font-size:2em;position:relative;left:500px'>Email: Ksitou@umd.edu</p>    

        <p style='color:white;font-size:2em;position:relative;left:520px'>Name: Louie Liu</p>  
        <p style='color:white;font-size:2em;position:relative;left:500px'>Email: gliu123@terps.edu</p> 

        <p style='color:white;font-size:2em;position:relative;left:520px'>Name: Yao Yuan</p>  
        <p style='color:white;font-size:2em;position:relative;left:500px'>Email: 8911832@qq.com</p> 

EOBODY;

	echo generatePage($body);


    if(isset($_POST["back"])){
        header("Location:terpShopping.html");
    }
?>