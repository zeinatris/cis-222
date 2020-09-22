<?php

/**
 * q2.txt
 *
 * Quiz 2 for chapter 2.
 *
 * @category   Quiz
 * @package    Quiz 2
 * @author     Zein Atris <zhatris@hawkmail.hfcc.edu>
 * @version    2020.09.17
 * @grade       11 / 10
 */

// 2 pts
// 1. Suppose I have the following two variables setup inside a PHP file.
// Write any additional code needed to connect the strings and output their contents.
$name = "Keanu Reeves";
$sentence = " is my favorite actor.";
echo $name.$sentence;

// 3 pts
// 2. Assume the $name variable is already set to the string "Keanu Reeves"
// Write an echo statement using the concatenation operator to send output to the browser.
// Once complete, the data sent to the browser should look exactly like this....
// <p>The Keanu Reeves</p>
$name = "Keanu Reeves";
echo '<p> The ' . $name .'</p>';

// 2 / 2 pts
// 3. Define a constant called MOVIE_TITLE and set it to the following string.
// "The Matrix"
define( 'MOVIE_TITLE', 'The Matrix' );

// 3 pts
// 4. Define an array called $classes and populate it with strings containing the classes you have taken at HFC (at least 3 or 4).
//		Then use a foreach loop to step through that array and echo their contents, don't forget to format with <br> tags.
$classes = ["cis122", "cis126", "cis130", "cis129"];
foreach( $classes as $class)
    echo "$class<br>";

// +1 ex pts
// 5. List 2 more escape characters not used in the example below, and what they output when used.
// Example: "\$" will output a $.

//\' will output a '
//\" will output a "
?>
