<?php
//This grabs everything from the product table in the database//
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $qry1 = "SELECT * FROM `Product` WHERE `ItemNumber`='$id'";

    $stmt = $pdo->query($qry1);
    $r1 = $stmt->execute();
    $row = $stmt -> fetch(); ?>

        <div class="item1"><img  src="<?php echo $row['Img']; ?>" alt="logo"/>
            <h1<a class="Title"><?php echo $row['ItemName']; ?></a></h1>

<p>$<?php echo $row['ItemPrice'] ?></p><br>

<p><?php echo $row['ItemDescription'] ?></p>

        </div>

    <form method="post" >
    <input type="text" name="quantity" class="form" value="1">
         <input type="hidden" name="action" value="cart">
             <button>Add to Cart</button>
</form>

<?php
    if(isset ($_SESSION['cart_message'])) {
        echo $_SESSION['cart_message'];
    }
}
    ?>



