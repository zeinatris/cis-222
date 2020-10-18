<?php
if(isset($_POST['find'])) {
    $pr = $_POST['price'];
    $qry = "SELECT * FROM `midterm_cars` WHERE `CarPrice`='$pr'";
    $stmt = $pdo->prepare($qry);
    $r1 = $stmt->execute();
    while ($row = $stmt->fetch()) {?>

<tr>
    <form action="index.php?page=findcar" method="post" name="page">
        <td><?php echo $row['CarID'];?></td>
        <td><?php echo $row['CarMake'];?></td>
        <td><?php echo $row['CarModel'];?></td>
        <td><?php echo $row['CarPrice'];?></td>
        <td><?php echo $row['CarYear'];?></td>
</form>
</tr>
<?php
    }
}
?>
<form action="index.php?page=findcar" method="post">
    <div>
        <input type="hidden" name="page" value="insert">
        <input type="hidden" name="action" value="add_insert">
        <label for="price">Car Price: </label>
        <input id="price" type="text" name="price" placeholder="Price" ><br> <br>
        <input type="submit" value="search" name="find">
    </div>
</form>
<button onclick="history.go(-1);">Back </button>