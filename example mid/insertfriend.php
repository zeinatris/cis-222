<?php

    if(isset($_POST['insert'])){var_dump($_POST['insert']);
        if(empty($_POST['id'] || empty($_POST['type']) || empty($_POST['breed'])))
        {
            echo "Please fill in blanks";
        }
        else
        {
            $id = $_POST['id'];
            $type = $_POST['type'];
            $breed = $_POST['breed'];

            $qry =  " INSERT INTO `Midterm_Animals`
        ( `AnimalId`,`AnimalType`,`AnimalBreed`,`CheckedIn`,`CheckedOut`)
					VALUES
					('id', 'type','breed', NOW(), NULL );  ";

            $stmt = $pdo->prepare ($qry);
            $r1 = $stmt -> execute();
            if($r1)
            {
                echo "Welcome";
            }
            else
            {
                echo "Check you Qry";
            }
        }

    }

?>
<form action="index.php" method="post">
    <div>
    <input type="hidden" name="page" value="insert">
    <input type="hidden" name="action" value="add_insert">
    <label for="name">Animal Id: </label>
    <input id="name" type="text" name="id" placeholder="Id" required><br> <br>

    <label for="type">Animal Type: </label>
    <input id="type" type="text" name="type" placeholder="Type" required><br> <br>

    <label for="breed">Animal Breed: </label>
    <input id="breed" type="text" name="breed" placeholder="Breed" required><br> <br>
    <input type="submit">
    </div>
</form>
<?php
$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
echo "<a href='$url'>back</a>";
?>

