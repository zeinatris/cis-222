<?php
//This grabs everything from the product table in the database//
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $qry1 = "SELECT * FROM `Product` WHERE `ItemNumber`='$id'";

    $stmt = $pdo->query($qry1);
    $r1 = $stmt->execute();
    $row = $stmt -> fetch(); ?>

    <form action="index.php?page=detail" method="get">
    <input type="hidden" name="id" value="insert">
        <div class="item1"><img  src="<?php echo $row['Img']; ?>" alt="logo"/>
            <h1<a class="Title"><?php echo $row['ItemName']; ?></a></h1>
<p>$<?php echo $row['ItemPrice'] ?></p>
<p><?php echo $row['ItemDescription'] ?></p>
<p>
    <button>Add to Cart</button>
</p>
        </div>
</form>
<?php
}



    ?>



