<?php
$id = $_GET['GetId'];
$qry1 ="SELECT * FROM `Midterm_Animals` WHERE AnimalId ='".$id."'";
$stmt = $pdo->prepare( $qry1 );
$r1 = $stmt -> execute();
while ($row = $stmt -> fetch()) {
    $id = $row['AnimalId'];
    $at = $row['AnimalType'];
    $ab = $row['AnimalBreed'];
    $chkin = $row['CheckedIn'];
    $chkOut = $row['CheckedOut'];
    ?>
    <form action="updatefriend.php" method="post">
        <div>
            <input type="hidden" name="page" value="insert">
            <input type="hidden" name="action" value="add_insert">
            <label for="name">Animal Id: </label>
            <input id="name" type="text" name="id" placeholder="Id" value="<?php echo $id ?>"><br> <br>

            <label for="type">Animal Type: </label>
            <input id="type" type="text" name="type" placeholder="Type" value="<?php echo $at ?>"><br> <br>

            <label for="breed">Animal Breed: </label>
            <input id="breed" type="text" name="breed" placeholder="Breed" value="<?php echo $ab ?>"><br> <br>
            <input type="submit" name="update">
        </div>
    </form>

    <?php
}
?>