<?php    if(isset($_POST['insert'])){
    if(empty($_POST['id'] || empty($_POST['make']) || empty($_POST['model']) || empty($_POST['price']) || empty($_POST['year'])))
    {
        echo "Please fill in blanks";
    }
    else
    {
        $id = $_POST['id'];
        $make = $_POST['make'];
        $model = $_POST['model'];
        $price= $_POST['price'];
        $year = $_POST['year'];

        $qry =  " INSERT INTO `midterm_cars`
        ( `CarId`,`CarMake`,`CarModel`,`CarPrice`,`CarYear`)
					VALUES
					('$id', '$make','$model', '$price', '$year' );  ";

        $stmt = $pdo->prepare ($qry);
        $r1 = $stmt -> execute();
        if($r1)
        {
            echo "Data has been inserted";
        }
        else
        {
            echo "Data has not been inserted";
        }
        var_dump($r1);
    }

}
?>
<form action="index.php" method="post">
    <div>
        <input type="hidden" name="page" value="insert">
        <input type="hidden" name="action" value="add_insert">
        <label for="id">Car ID: </label>
        <input id="id" type="text" name="id" placeholder="Id" required><br> <br>

        <label for="name">Car Make: </label>
        <input id="name" type="text" name="make" placeholder="Make" required><br> <br>

        <label for="name">Car Model: </label>
        <input id="name" type="text" name="model" placeholder="model" required><br> <br>

        <label for="price">Car Price: </label>
        <input id="price" type="text" name="price" placeholder="Price" required><br> <br>

        <label for="year">Car Year: </label>
        <input id="year" type="text" name="year" placeholder="Year" required><br> <br>
        <input type="submit" value="insert" name="insert">
    </div>
</form>
<button onclick="history.go(-1);">Back </button>
