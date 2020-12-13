<?php
//This grabs everything from the product table in the database//
$qry1 = "SELECT * FROM `Product`";

$stmt = $pdo->prepare( $qry1 );
$r1 = $stmt -> execute();
while ($row = $stmt -> fetch())  {

    ?>
    <!--This form inputs the images,title and price from the database-->
    <div class="box">
        <form action="index.php?page=catalog" method="get">
            <div class="item1"><img src="<?php echo $row['Img'];?>" alt="logo"/>
                <p><a class="Title" href="index.php?page=detail&id=<?php echo $row['ItemNumber']?>"><?php echo $row['ItemName']; ?></a>
                <p>$<?php echo $row['ItemPrice'] ?></p>
                <input type="text" name="quantity" class="form" value="1">
                <input type="hidden" name="hidden_name" value="<?php echo $row['ItemName']; ?>">
                <input type="hidden" name="hidden_price" value="<?php echo $row['ItemPrice']; ?>"><br><br>
                <input type="submit" name="add" class="btn1" value="Add to Cart">
            </div>
        </form>
    </div>
    <?php
}

?>