<?php
if(isset($_POST['DeleteBtn'])){
$id = $_POST['btnDelete'];
$pdo->query("DELETE FROM `Cart` WHERE cart_id = '$id'");
}
if(isset($_POST['UpdateBtn'])){
    $qty = $_POST['qty1'];
    $pdo->query( "UPDATE `Cart` SET `cart_qty`='" . $qty . "'");
}
?>
<!--This shows you whats in the database-->
<div class="cart">
    <table>
        <tr>
            <th>Item Name</th>
            <th>Cart Qty</th>
            <th>Item ID</th>
            <th>Price</th>
        </tr>
    </table>
</div>
<?php
$qry = "SELECT * FROM `Cart`";
$stmt = $pdo->prepare( $qry );
$r1 = $stmt -> execute();
while ($row = $stmt -> fetch()){?>
    <tr>
        <form action="index.php?page=cart" method="get" name="page">
            <td><input type="checkbox" name="btnDelete" value="<?php echo $row['cart_id'];?>" required></td>
            <td><?php echo $row['item_name'];?></td>
            <td><input type="text"  name="qty1" value="<?php echo $row['cart_qty'];?>"></td>
            <td><?php echo $row['product_id'];?></td>
            <td>$<?php echo $row['item_price']; ?></td>

            <td><input type="submit" value="Delete" name="DeleteBtn"></td>
            <td><input type="submit" value="Update" name="UpdateBtn"></td>
        </form>
    </tr>
    <?php
}
?>
<form action="index.php?page=checkout" method="post" name="page">
    <input type="hidden" name="action" value="checkout">
    <input type="hidden" name=""
    <button>Check Out</button>
</form>
