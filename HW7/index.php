<?php
/**
 *
 *
 * Homework 6
 *
 *
 * @category   Homework
 * @package    Homework 6
 * @author     Zein Atris <zhatris@hawkmail.hfcc.edu>
 * @version    2020.12.3
 * @link       https://cislinux.hfcc.edu/~zhatris/cis222/HW7/index.php
 * @grade
 */

include('../../../creds.php');

$host = '127.0.0.1';
$db = 'zhatris';
$user = 'zhatris';
$pass = MYSQLPASS;
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt =
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

$pdo = new PDO($dsn, $user, $pass, $opt);

$qry = "SELECT * FROM `Image`;";
$r = $pdo->query( $qry );

?>



<!DOCTYPE html>
<html>
<body>
<H1>HOMEWORK #7</H1>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <h4>Select image to upload:</h4>
    <input type="file" name="fileToUpload" id="fileToUpload"><BR><BR>
    <input type="submit" value="Upload Image" name="submit">
</form>

<!--This is for the list images-->
<br>
<hr>
<br>
<H2>List saved files</H2>

<?php

echo "<table>";
echo "<tr>";
while ($row = $r->fetch())
{
    echo "<th> {$row['Field']} </th>";
}
echo "</tr>";
while ($row = $r->fetch(PDO::FETCH_NUM)) {
    echo "<tr>";
    foreach ($row as $value)
    {
        echo "<td>" . $value . "</td> ";
    }
    echo "</tr>";
}
echo "</table>";

?>


</body>
</html>