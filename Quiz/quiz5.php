<?php
/**
 * q5.txt
 *
 * Quiz 5 Try Catch!
 *
 * @category    Quiz
 * @package     Quiz 5
 * @author      Zein Atris <zhatris@hfcc.edu>
 * @version     2020.10.29
 * @grade
 */

// 1. (2pts) Write a try / catch statement.

try{
$calc = 0/5;
}
catch(Exception $e){
    echo $e -> getMessage();
}
// 2. (4pts) Populate the try section with a call to get_file_contents, and load from a file called data.txt
//              Echo the contents in an h1 tag with a green font color.
$fn = 'data.txt';
try{
    $c = file_get_contents($fn);
}
catch(Exception $e){
    echo '<h1 style="color:green;">'.$e -> getMessage().'</h1>';
}

// 3. (4pt) In the catch section, echo the error message wrapped in an h1 tag with red font color.
$fn = 'data.txt';
try{
    $c = file_get_contents($fn);
}
catch(Exception $e){
    echo '<h1 style="color:red;">'.$e -> getMessage().'</h1>';
}

// B. (1pt) Describe what a finally section is used for.
//its used to preform cleanup code such as closing a file and closing a data connection it always executes when the try catch block exits.//