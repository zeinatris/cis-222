<?php
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

$qry = 'SELECT * FROM threads WHERE id = ' . $_GET['id'];
$r = $pdo->query($qry);
$qry2 = 'SELECT * FROM messages WHERE thread_id = ' . $_GET['id'];
$r2 = $pdo->query($qry2);
?>
<!DOCTYPE html>
<html>
<head>
   <title>HW 8 & 9</title>
</head>
<body>
<div class="content">
    <?php while ($row = $r->fetch()){ ?>
        <h1><?php echo $row['title']?></h1>
        <p><?php echo $row['content']?></p>

        <br><br><a href='index.php'>BACK HOME</a>
        <HR>
        <h2>Add a new message:</h2>
        <FORM METHOD="POST">
            <label for="comments">Comments:</label><br>
            <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
            <BUTTON TYPE="SUBMIT" VALUE="SUBMIT" class="button btnNew">add comment</BUTTON>
        </FORM>
        <hr>
        <h3>Comments list</h3>
        <?php
        echo "<table width=500>";
        echo "<tr>
            <th>date</th>
            <th>username</th>
            <th>content</th>
      </tr>";
        while ($row = $r2->fetch())
        {
            echo "<tr>";
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['content']."</td>";
            echo "</tr>";
        }
        echo "</table><br>";
        ?>

    <?php } ?>
    <?php
    if($_POST)
    {
        $qry2 = "INSERT INTO messages (thread_id, content, date, username)
             VALUES ('".$_GET['id']."','".$_POST[message]."',now(),'$_SESSION[name]'); ";
        if ($pdo->query($qry2))
        {
            echo "<br>";
            echo '<script>alert("Your message was updated successfully.")</script>';
            header("Refresh:0");
        }
        else
        {
            echo "<br>";
            echo 'Data not successfully updated.';
        }
    }
    ?>
</div>
</body>
</html>