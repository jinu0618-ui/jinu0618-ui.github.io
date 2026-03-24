<html>
<body>

<form action="welcome_get.php" method="get">
input number: <input type="text" name="number"><br>
<input type="submit"><br><br><br><br><br><br>
input number: <input type="text" name="number2"><br>
<input type="submit">
</form>

<?php 
if (isset($_GET["number"]) && isset($_GET["number2"])){
 echo "width : ". $_GET["width"]. "<br>";
 echo "height : " .$_GET["height"]. "<br>";
 echo "area : " .$_GET["width"]*$_GET["height"]. "<br>";
}
?> 
</body>
</html>