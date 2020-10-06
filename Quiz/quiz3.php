<?php
/**
 * q3.txt
 *
 * Back to PHP (Chapter 3) for this quiz!
 *
 * @category    PHP
 * @package     Quiz 3
 * @author      Zein Atris <zhatris@hawkmail.hfcc.edu>
 * @version     2020.10.01
 * @grade       9 / 10
 */

// 2.5 / 3 pts
// 1. You are building a new site and have to implement a few files to do so.
//		However, there are a couple conditions for these files that must be met.
//		Write the code needed to accomplish this task and meet the conditions.
//
//		apis/file1.php		This file imports data for our API service; it must be executed, but must not be executed more than one time per page.
//		file2.php			This file imports a cool visual effect; it can be executed, but must not be executed more than one time per page.
//		file3.php			This file dynamically generates data for the page; it can be executed as often as needed.
require_once('apis/file1.php');
include_once('file2.php');
include('file3.php');

// 2 pts
// 2. We want to start collecting email addresses to add to our mailing list.
//		Finish the form below so that it contains a text input to enter a users email address, and a submit button that posts the data to a add_email_subscriber.php page.
//		You do not need to handle the data or response of the form, just finish the form itself.
?>
    <form actoin="add_email_subscriber.php" method="post">
        <input type="hidden" name="action" value="addToMailingList" >
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
    </form>
<?php


// 3 pts
// 3. Create a function that accepts 3 parameters, you can name it anything you want.
//		The first parameter should be multiplied by the second, and then the third parameter should be added to that product.
//		The function should return the result of this operation.
function multiply($p1, $p2, $p3)
{
    return $p1 * $p2 + $p3;
}
// 1.5 / 2 pts
// 4. Below are a 3 variables that have been set to numbers.
//		Call the function you defined above by passing it the three variables below, and be sure to store the result in a var.
//		Then echo the result in a sentence, be sure the output is formatted nicely in HTML.
$i1 = 7;
$i2 = 13;
$i3 = 17;

$result = multiply($i1, $i2, $i3);
echo "<p>your result is" . $result . "</p>";

// 1 ex pts
// 5. Write a for loop that executes a number of times equal to the result from question 4.
//      Inside the for loop include a file named random_firework_animation.php for each iteration.
