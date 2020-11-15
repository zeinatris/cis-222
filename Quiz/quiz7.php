<?php
/**
 * quiz7.txt
 *
 * Cookies and sessions
 *
 * @category    Chapter 12
 * @package     Quiz 7
 * @author      Zein Atris <zhatris@hawkmail.hfcc.edu>
 * @version     2020.11.12
 * @grade
 */

// 1. (2pts) Using a PHP function, save a cookie named favLoop.
//              The cookie should contain the value saved in the $fl variable.
//              The cookie should expire after 90 days.
$fl = "foreach";
setcookie('favLoop',$fl,time() + (86400 * 90));

// 2. (2pts) Using a PHP function, save a cookie named favObject.
//              The cookie should contain the value saved in the $fo variable.
//              The cookie should expire after 90 days.
$fo = "PDO";
setcookie('favObject',$fo,time() + (86400 * 90));

// 3. (3pt) Imagine you have a user_id in a variable called $uid.
//          Write the code needed below to store that user_id in a session variable.
//          Name this session index current_user_id.
$uid = 42;
$_SESSION['current_user_id']=$uid;

// 4. (3pts) Now write the following 3 echo statements, where X, Y, and Z are the cookies and sessions from above.
//              My favorite loop is X.
//              My favorite object is Y.
//              Your user ID is Z.
echo'<p>My favorite loop is:'.$_COOKIE['favLoop'].'</p>';
echo'<p>My favorite object is:'.$_COOKIE['favObject'].'</p>';
echo'<p>Your user id is:'.$_COOKIE['current_user_id'].'</p>';
// B. (1pt) What must you do before using the $_SESSION array?



