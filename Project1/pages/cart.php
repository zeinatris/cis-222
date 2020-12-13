<?php
include( __DIR__ . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR. 'db.php' );

$qry = "SELECT * FROM `products` ";	$qry = "SELECT * FROM `Cart`; ";

$stmt = $pdo->prepare($qry);	$stmt = $pdo->prepare($qry);