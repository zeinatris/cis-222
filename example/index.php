<?php
include('credential.php');
require ('dbs.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form linked to database</title>
</head>
<body>
<form action="index.php" method="post">
    Name: <input type="text" name="username">
    <br>
    Email: <input type="text" name="email">
    <br>
    <input type="submit" value="insert" name="insert">
</form>
</body>
</html>