<?php
include('../../creds.php');

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
?>
var_dump( $pdo );
    <hr /><?php

$qry = 'SHOW TABLES;';

$r = $pdo->query( $qry );

while ($row = $r->fetch())
{
    echo '<br><br>' . $row["Tables_in_zhatris"];
}

echo '<hr />';


$qry = 'SELECT COUNT(*) FROM `P`; ';

$r = $pdo->query( $qry );

while ($row = $r->fetch())
{
    echo '<br><br>This table has ' . $row["COUNT(*)"] . ' rows of data.';
}
echo '<hr />';

$qry2 = 'SELECT * FROM `Contact`; ';

$r = $pdo->query( $qry2 );

while ($row2 = $r->fetch()) {
    echo '<br><br>';
    var_dump($row2);
}

echo '<hr />';

$qry = 'SELECT * FROM `P`; ';

$r = $pdo->query( $qry );

while ($row = $r->fetch())
{
    echo '<br><br>';
    var_dump( $row );
}

