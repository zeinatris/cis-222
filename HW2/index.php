<?php
//https://cislinux.hfcc.edu/~zhatris/cis222/HW2/
var_dump($_POST);

echo '<br><br><h3>POST</h3>';
    $students = ["Chad", "Farhana", "Colin", "Ali", "Zein"];
    $arrLength = $students;
if ($students > 5){
    echo "We have enough students<br>";
}
else {
    echo "Not enough students";
}
foreach ($students as $student) {
        echo "$student<br>";
    }
?>

<form method="post" action="index.php" >

    <label for="Message" ></label>
    <input type="text" id="Message" name="Message" >

    <input type="submit" value="Send" >

</form>
