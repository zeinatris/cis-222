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
                <p><a class="Title" href="index.php?page=detail&id=<?php echo $row['ItemNumber']?>"><?php echo $row['ItemName']; ?></a></>
                <p>$<?php echo $row['ItemPrice'] ?></p>
                <p>
                    <button>Add to Cart</button>
                </p>
            </div>
        </form>
    </div>
    <?php
}

?>