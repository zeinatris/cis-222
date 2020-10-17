<?php

/* this connects to the database*/
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

<?php
$qry1 = 'SHOW TABLES';
$all = array('Contact'); var_dump($all);
$stmt = $pdo->query( $qry1 );
$r1 = $stmt -> execute();
while ($row = $stmt -> fetch()):
    ?>
    <a href='describeTable.php?page=<?php echo $row["Tables_in_zhatris"];?>'><?php echo $row["Tables_in_zhatris"];?></a><br>

    <?php
    endwhile;
?>
<button onclick="history.go(-1);">Back </button>