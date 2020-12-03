<?php
/**
 *
 *
 * Homework 6
 *
 *
 * @category   Homework
 * @package    Homework 6
 * @author     Zein Atris <zhatris@hawkmail.hfcc.edu>
 * @version    2020.11.30
 * @link       https://cislinux.hfcc.edu/~zhatris/cis222/HW6/index.php
 * @grade
 */
$key = 'has_sent_form';
session_start();
if( !isset($_SESSION[$key]) )
{
    $_SESSION['has_sent_form'] = 'No';
}
if( isset( $_POST['action'] ) )
{
    if( $_POST['action'] == 'Submit' )
    {
        $_SESSION['has_sent_form'] = $_POST['fn'];
    }
}
$output = 'No Session Info!';
if( isset($_SESSION[$key]) )
{
    $output = $_SESSION[$key];
}
?>
<--This is to get information from the user-->

    <html lang="en">
    <body>
    <link rel="stylesheet" href="style.css">
    <div class="content">
        <form method="post" >
            <label for="fn">First name:</label><br>
            <input type="text" id="fn" name="fn"><br><br>
            <label for="ln">Last name:</label><br>
            <input type="text" id="ln" name="ln"><br><br>
            <label for="carsl">Select a car:</label><br>
            <select id="cars" name="cars">
                <option value="Lexus">Lexus</option>
                <option value="Ford">Ford</option>
                <option value="BMW">BMW</option>
            </select>
            <br><br>
            <label for="option">Would you like to receive Notification emails?</label>
            <br>
            <input type="radio" id="yes" name="email" value="Yes" checked>
            <label for="yes">yes</label>
            <input type="radio" id="no" name="email" value="no">
            <label for="no">no</label>
            <br><br>
            <input type="submit" name="action" value="Submit">
        </form>
    </div>
    </body>
    </html>
<?php
echo '<p>Has Sent Form: ' . $output . '</p>';
unset($key);
setcookie('BrokenCookie', 'any text');
echo '<p>Cookie: '. $_COOKIE['BrokenCookie'] . '</p>';
