<?php
include('credential.php');
require ('render.php');
?>
<head>
    <title>Midterm</title>
</head>
<nav>
    <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="index.php?page=insertfriend">Insert</a></li>
        <li><a href="index.php?page=updatefriend">Update</a></li>
    </ul>
</nav>
<?php
$qry1 = "SELECT * FROM `Midterm_Animals`";

$stmt = $pdo->prepare( $qry1 );
$r1 = $stmt -> execute();
$count = 0;
while ($row = $stmt -> fetch()) {

    ?>
    <form action="index.php" method="get">
        <div>
            <p><?php echo $row['AnimalType']; ?></p><br>
            <P><?php echo $count++; ?></P>
        </div>
    </form>
    <?php
}
?>
