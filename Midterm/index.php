<?php
/**
 * Exam
 *
 * @category   SQL
 * @package    CIS-222
 * @author     Zein Atris
 * @date       2020.10.18
 * @grade
 * @comments
 * @link https://cislinux.hfcc.edu/~zhatris/cis222/Midterm/index.php
 */
?>
<head>
    <title>Midterm</title>
</head>


<nav>
    <ul>
        <li class="active" ><a href="index.php" >Home</a></li>
        <li><a href="index.php?page=insertcar">Insert</a></li>
        <li><a href="index.php?page=updatecar">Update</a></li>
        <li><a href="index.php?page=deletecar">Delete</a></li>
        <li><a href="index.php?page=findcar">Find</a></li>
    </ul>
</nav>
<?php
include ('db.php');
require ('render.php');



$qry1 = "SELECT * FROM `midterm_cars`";

$stmt = $pdo->prepare( $qry1 );
$r1 = $stmt -> execute();
while ($row = $stmt -> fetch()) {

    ?>

    <form action="index.php" method="get">
        <div>
            <p><?php echo '<br><br>'.$row['CarID']. '   ' .$row['CarMake']. '  ' . $row['CarModel'].'        $'. $row['CarPrice']. '        ' .$row['CarYear']; ?></p>
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

$qry = 'SELECT AVG(CarPrice) AS PriceAverage FROM `midterm_cars`;';

$r = $pdo->query( $qry );

while ($row = $r->fetch())
{
    echo '<br><br>The Avarage price of cars on the lot is $' . $row["PriceAverage"];
}
?>

