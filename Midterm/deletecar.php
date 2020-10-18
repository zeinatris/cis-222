<?php

if(isset($_POST['DeleteBtn'])){
    $id = $_POST['btnDelete'];
$pdo->query("DELETE FROM `midterm_cars` WHERE CarID = '$id'");
}
?>
<div>
<table>
    <tr>
    <th>Car Id</th>
    <th>Car Make</th>
    <th>Car Model</th>
    <th>Car Price</th>
    <th>Car Year</th>
    </tr>
</table>
</div>
<?php
$qry = "SELECT * FROM `midterm_cars`";
$stmt = $pdo->prepare( $qry );
$r1 = $stmt -> execute();
while ($row = $stmt -> fetch()){?>
<tr>
    <form action="index.php?page=deletecar" method="post" name="page">
        <td><?php echo $row['CarID'];?></td>
        <td><?php echo $row['CarMake'];?></td>
        <td><?php echo $row['CarModel'];?></td>
        <td><?php echo $row['CarPrice'];?></td>
        <td><?php echo $row['CarYear'];?></td>
        <td><input type="checkbox" name="btnDelete" value="<?php echo $row['CarID'];?>" required></td>
        <td><input type="submit" value="Delete" name="DeleteBtn" </td>
    </form>
</tr>
<?php
}
?>
<button onclick="history.go(-1);">Back </button>
