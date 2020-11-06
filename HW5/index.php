<?php
/**
 *
 *
 * Homework 5
 *
 *
 * @category   Homework
 * @package    Homework 5
 * @author    Zein Atris <zhatris@hawkmail.hfcc.edu>
 * @version    2020.11.04
 * @link       https://cislinux.hfcc.edu/~zhatris/cis222/HW5/index.php
 * @grade
 */
require( 'MyBaseObject.php' );
require( 'MyFileObject.php' );
$newObj = new MyBaseObject( ' Go ', ' 3135572233 ', 'Zein');
$newObj -> show();
echo "<br>";

$newObj -> file_set_Content('content');
$newObj -> file_set_name('name');
$newObj -> show();
echo "<br>";

$df = new MyFileObject();
$df -> file_set_filename('data.txt');
echo "file 1 content: ";

$df2 -> load();
$df2 = new MyFileObject();
$df2 -> file_set_filename('data2.txt');
echo "file 2 content:";

$df2 -> load();
echo "ADD CONTENT TO FILE";
$ad = new MyFileObject();
$ad -> file_set_Filename('data3.txt');
$line = 'New line';
$ad -> save($line);
$ad -> load();