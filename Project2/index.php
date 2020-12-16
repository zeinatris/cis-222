<?php
/**
 * index.php
 *
 * Project Part 2
 *
 * @category   	P2
 * @package    	CIS-222
 * @author     	Zein Atris
 * @version    	2020.11.15
 * @link       	https://cislinux.hfcc.edu/~zhatris/cis222/Project2/
 *
 * @grade
 *
 */


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


