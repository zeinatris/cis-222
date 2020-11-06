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
 * @grade       10 / 10
 */

// 1. (2/2pts) Write a try / catch statement.

try{
$calc = 0/5;
}
catch(Exception $e){
    echo $e -> getMessage();
}
// 2. (3/4pts) Populate the try section with a call to get_file_contents, and load from a file called data.txt
//              Echo the contents in an h1 tag with a green font color.
// 3. (4/4pt) In the catch section, echo the error message wrapped in an h1 tag with red font color.
$fn = 'data.txt';
try{
    $c = file_get_contents($fn);
    echo '<h1 style="color:green;">'.$c.'</h1>';
}
catch(Exception $e){
    echo '<h1 style="color:red;">'.$e -> getMessage().'</h1>';
}

// B. (1/1pt) Describe what a finally section is used for.
//its used to preform cleanup code such as closing a file and closing a data connection it always executes when the try catch block exits.//
