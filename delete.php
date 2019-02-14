<html>
<head>
    <meta charset="UTF-8" />
    <title>Group Project </title>
    <link rel="stylesheet" href="terpShopping.css" />
</head>

<body background = "2.jpg">
<img src="umcp.png" name="umcp" style='width: 5em;position: relative; left: 290px;top:60px'>
<h1 style='position:relative;left:-0.5em'>Delete Items </h1> 
<img src="umcp.png" name="umcp" style='width: 5em;position: relative; left: 870px;top:60px'>
<hr style='position:relative;top:-0.1em'>
<hr style='position:relative;top:-0.1em'>
    <input type="reset" name="Reset" value="Clear" style='position:relative;left:22em;top:-0.2em'onclick="window.location.href='delete.php'">
	<form action="delete_processing.php" method="post">
    <input type="submit" name="deleteOne" value="Delete 1 item" style='position:relative;left:29em;top:-1.7em'>
    <input type="submit" name="deleteAll" value="Delete all items" style='position:relative;left:34em;top:-1.7em'>
<hr style='position:relative;top:-2em'>
<hr style='position:relative;top:-2em'>
<fieldset>
<h2 style='position:relative;left:3.5em;color:white'>Admin Page</h2>
<input type="text" name="manager" placeholder="admin name" style='position:relative;left:8em'><br><br><br>
<input type ="password" name="password" placeholder="admin password" style='position:relative;left:8em'><br><br><br>
<input type ="text" name="id" placeholder="Delete id" style='position:relative;left:8em'><br><br>
</fieldset>
</form>
<input type="submit" name="back" value="Go Back" style='position:relative;left:56em;top:-20.9em' onclick="window.location.href='afterSignin.php'">
</body>
</html>