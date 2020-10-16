<?php
include_once('describeTable.php');
/*Connecting to the database*/
$qry1 = 'SHOW TABLES';

/*Looping through the results and echoing each table to the screen*/
$stmt = $pdo->prepare( $qry1 );
$r1 = $stmt -> execute();
while ($row = $stmt -> fetch())  {?>

    <hr />    <br><br><a href="describeTable.php?page=Contact">Contact</a>
<br><br><a href="describeTable.php?page=Customer">Customer</a>
<br><br><a href="describeTable.php?page=Employees">Employees</a>
<br><br><a href="describeTable.php?page=Midterm_Animal">Midterm_Animal</a>
<br><br><a href="describeTable.php?page=P">P</a>
<br><br><a href="describeTable.php?page=Persons">Persons</a>
<br><br><a href="describeTable.php?page=Players">Players</a>
<br><br><a href="describeTable.php?page=Product">Products</a>
<br><br><a href="describeTable.php?page=Orders">Orders</a>
<br><br><a href="describeTable.php?page=Payments">Payments</a>
<hr />
<?php
}
?>

