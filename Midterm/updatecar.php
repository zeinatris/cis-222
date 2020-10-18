<?php
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $year = $_POST['year'];

    $qry = " UPDATE `midterm_cars` SET `CarMake`='" . $make . "',`CarModel`='" . $model . "',`CarPrice`='" . $price . "',`CarYear`='" . $year . "' WHERE `CarId`='" . $id . "'";

    $stmt = $pdo->prepare($qry);
    $r1 = $stmt->execute();
    if ($r1) {
        echo "Data has been updated";
    } else {
        echo "Data has not been updated";
    }
    var_dump($r1);
}
?>
<form action="index.php?page=updatecar" method="post">
    <div>
        <input type="hidden" name="page" value="insert">

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
        <input type="submit" value="Update" name="update">
    </div>
</form>
<button onclick="history.go(-1);">Back </button>