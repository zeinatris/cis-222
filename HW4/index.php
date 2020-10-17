<?php
require ('describeTable.php');
/*Connecting to the database*/
$qry1 = 'SHOW TABLES';

/*Looping through the results and echoing each table to the screen*/
$stmt = $pdo->prepare( $qry1 );
$r1 = $stmt -> execute();
while ($row = $stmt -> fetch()):?>
    <a href='describeTable.php'>
        <a href="describeTable.php?page=contact">Contact</a><br>
        <a href="describeTable.php?page=customer">Customer</a><br>
        <a href="describeTable.php?page=employees">Employees</a><br>
        <a href="describeTable.php?page=midterm_animals">Midterm_Animals</a><br>
        <a href="describeTable.php?page=persons">Persons</a><br>
        <a href="describeTable.php?page=player">Players</a><br>
        <a href="describeTable.php?page=midterm_cars">midterm_cars</a><br>
        <a href="describeTable.php?page=orders">orders</a><br>
        <a href="describeTable.php?page=payment">payment</a><br>
<?php
endwhile;
?>

