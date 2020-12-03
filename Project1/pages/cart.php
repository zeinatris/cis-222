<?php
?>
<div style="clear: both"></div>
<h3 class="title2">Shopping Cart Detail</h3>
<div class="table table-bordered">
    <tr>
        <th width="30%">Product Name</th>
        <th width="10%">Quantity</th>
        <th width="13%">Price Details</th>
        <th width="10%">Total Price</th>
        <th width="17%">Remove Item</th>
    </tr>
    <?php
        if(!empty($_SESSION['cart'])) {
            $total = 0;
            foreach ($_SESSION['cart'] as $key => $value) {
                ?>
                <td><?php echo $value["item_name"]; ?></td>
                <td>$ <?php echo $value["item_quantity"]; ?></td>
                <td>$ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                <td><a hfef="cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-d"></span></a></td>
</div>
    <?php}
}?>