<?php
/**
 *
 *
 * Homework 8 & 9
 *
 *
 * @category   Homework
 * @package    Homework 8 & 9
 * @author     Zein Atris <zhatris@hawkmail.hfcc.edu>
 * @version    2020.12.15
 * @link       https://cislinux.hfcc.edu/~zhatris/cis222/HW8&9/index.php
 * @grade
 */


include('../../../creds.php');

$host = '127.0.0.1';
$db = 'zhatris';
$user = 'zhatris';
$pass = MYSQLPASS;
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt =
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

$pdo = new PDO($dsn, $user, $pass, $opt);

session_start();
$qry = "SELECT * FROM threads;";
$r = $pdo->query( $qry );
if($_POST){
    $date = date('Y-m-d H:i:s');
    $qry = "INSERT INTO threads (title, content, creation_date, last_edit_date, creators_username)
                VALUES ('$_POST[title]','$_POST[content]','$date', '$date' , '$_SESSION[name]')";
    if ($pdo->query( $qry )){
        echo "<br>";
        echo 'Your thread was added successfully.';
        header( "Refresh:1; url=https://cislinux.hfcc.edu/~zhatris/CIS-222/hw8&9/index.php", true, 303);
    }
    else
    {
        echo "<br>";
        echo 'Data not successfully Inserted.';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>HW 8</title>
</head>
<body>
<div>
    <H1>HOMEWORK 8 & 9</H1>
    <br><br>
    <div class="message">Welcome <B><?php echo $_SESSION["name"]; ?></B></div>
    <HR>
    <FORM METHOD="POST">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br><br>
        <label for="content">Content:</label><br>
        <textarea id="content" name="content" rows="4" cols="50"></textarea>
        <br><br>
        <BUTTON TYPE="SUBMIT" VALUE="SUBMIT">CREATE NEW THREAD</BUTTON>
    </FORM>
    <HR>
    <?php
    echo "<table>";
    echo "<tr>
                <th>Threads List</th>
                <th>Created by</th>
          </tr>";
    while ($row = $r->fetch())
    {
        echo "<tr>";
        echo "<td><a href='thread.php?id=".$row['id']."'>".$row['title']."</a></td>";
        echo "<td>".$row['creators_username']."</td>";
        echo "</tr>";
    }
    echo "</table><br>";
    ?>
</div>
</body>
</html>
