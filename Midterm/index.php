
<head>
    <title>Midterm</title>
</head>
<nav>
    <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="index.php?page=insertcar">Insert</a></li>
        <li><a href="index.php?page=updatecar">Update</a></li>
        <li><a href="index.php?page=deletecar">Delete</a></li>
    </ul>
</nav>
<?php

include('db.php');
require('insertcar.php');
require ('updatecar.php');

$qry1 = "SELECT * FROM `midterm_cars`";

$stmt = $pdo->prepare( $qry1 );
$r1 = $stmt -> execute();
while ($row = $stmt -> fetch()) {

    ?>
<!DOCTYPE html>
<html>
    <body>
    <form action="index.php" method="get">
        <div>
            <p><?php echo '<br><br>'.$row['CarMake']. '  ' . $row['CarModel'].'        $'. $row['CarPrice']. '        ' .$row['CarYear']; ?></p>
        </div>
    </form>
    <?php
}

$qry = 'SELECT COUNT(*) FROM `midterm_cars`; ';

$r = $pdo->query( $qry );

while ($row = $r->fetch())
{
    echo '<br><br>There are ' . $row["COUNT(*)"] . ' cars on the lot.';
}

$qry = 'SELECT AVG(CarPrice) AS PriceAverage FROM `midterm_cars` WHERE CarYear=2005;';

$r = $pdo->query( $qry );

while ($row = $r->fetch())
{
    echo '<br><br>The Avarage price of cars on the lot is $' . $row["PriceAverage"];
}
?>

    </body>
