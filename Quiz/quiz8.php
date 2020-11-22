<?php
/**
 * quiz8.txt
 *
 * Web dev stuff.
 *
 * @category    Chapter 11
 * @package     Quiz 8
 * @author      zhatris <zhatris@hawkmail.hfcc.edu>
 * @version     2020.11.19
 * @grade
 */

// 1. (6pts) Write the PHP needed below to send an email.
//          The subject should read "Test Email"
//          The body should use the variable $content
//          The email should be sent to crbanks1@hfcc.edu
//          Use your email address as the from and reply to addresses.
//          The email should also have valid headers.
$t	= 'crbanks1@hfcc.edu';
$sub 	= 'Test Email';
$con 	= 'The content of the message goes here.';
$h 	= 'From: zhatris@hawkmail.hfcc.edu' . "\r\n" . 'Reply-To: zhatris@hawkmail.hfcc.edu' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

$status = mail($t, $sub, $con, $h );

var_dump( $status );


// 2. (2pts) Using PHP, echo to the browser all the content required to have a JS alert pop up that says "Hello World!"
echo '<script>alert("Hello World!");</script>';


// 3. (2pt) Use the PHP header functionality to send the user to the following url: https://ldjam.com/
header('Location: https://ldjam.com/');


// B. (1pt) When uploading a file via an HTML form into PHP, what global array are the files temporarily stored in?
$_FILES;