<?php


/**
 * q9.txt
 *
 * Security
 *
 * @category    Chapter 13
 * @package     Quiz 9
 * @author      Zein Atris <zhatris@hawkmail.hfcc.edu>
 * @version     2020.12.06
 * @grade
 */


// 1. (5pts) Create a function or class that can accept at least one string parameter.

//Assume the parameter is a password, hash and return it.

function hashPassword($pass, $iterations = 300, $salt = "th3_S4l7")

{

    $password = crypt($pass, $salt);


    for ($i = 0; $i < $iterations; ++$i) {

        $password = crypt($password . $pass, $salt);

    }

    return $password;

}


// 2. (3pts) Let's say you have a password saved in the $pass variable.

//But do not assume this is true!

//Execute some checks to ensure the variable is not null and is indeed a string.

$pass = '';

if (!is_string($pass) || empty($pass)) {

    echo "Invalid Password";

}


// 3. (2pts) Use the function you created above to hash the $pass variable.

//Then save the hashed password in an $encp variable.


$encp = hashPassword('goodPassword');


// B. (2pt) Describe a honey pot.
//It is a hidden field in a html form that humans can't see but bots can read the code and can also
//fill in the field thus letting the program knows that the user is a bot and is not a human.//

