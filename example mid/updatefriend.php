<table>
    <tr>
        <td>Animal Id</td>
        <td>Animal Type</td>
        <td>Animal Breed</td>
        <td>Checked In</td>
        <td>Checked Out</td>
    </tr>
</table>
<br>
    <?php
$qry1 ="SELECT * FROM `Midterm_Animals`";
$stmt = $pdo->prepare( $qry1 );
$r1 = $stmt -> execute();
while ($row = $stmt -> fetch()){
    $id = $row['AnimalId'];
    $at = $row['AnimalType'];
    $ab = $row['AnimalBreed'];
    $chkin = $row['CheckedIn'];
    $chkOut = $row['CheckedOut'];
?>
    <br>
    <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $at ?></td>
        <td><?php echo $ab ?></td>
        <td><?php echo $chkin ?></td>
        <td><?php echo $chkOut ?></td>
        <td><a href="edit.php?GetId=<?php echo $id?>">Edit</a></td>
        <td><a href="#">Delete</a></td>
    </tr>
<?php
}

?>