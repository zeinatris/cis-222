<?php

session_start();

define( 'INDEX_PATH', __DIR__ );

// Include Utility class
include( INDEX_PATH . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR. 'utilities.php' );
// Include Users class
include( INDEX_PATH . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR. 'users.php' );


include('php/db.php');
include('php/controller.php');
$contr = new Controller( $pdo );
require('php/render.php');


