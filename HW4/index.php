<?php
/**
 * HW4
 *
 * @category   SQL
 * @package    CIS-222
 * @author     Zein Atris
 * @date       2020.10.08
 * @grade      5 / 10
 * @comments   Page does not load due to an error.
 * @link       https://cislinux.hfcc.edu/~zhatris/cis222/HW4/index.php
 */
require ('describeTable.php');
/*Connecting to the database*/
$qry1 = 'SHOW TABLES';
$p = $_GET['page'];
/*Looping through the results and echoing each table to the screen*/
$stmt = $pdo->prepare( $qry1 );
$r1 = $stmt -> execute();
while ($row = $stmt -> fetch($r1)){
?>
<a href='describeTable.php?page='>

    <?php
    }
?>

