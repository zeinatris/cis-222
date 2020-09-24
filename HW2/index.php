<?php
/**
 * q2.txt
 *
 * Quiz 2 for chapter 2.
 *
 * @category   Quiz
 * @package    Quiz 2
 * @author     Chad Banks <crbanks1@hfcc.edu>
 * @version    2020.09.17
 * @link       https://cislinux.hfcc.edu/~zhatris/cis222/HW2/
 * @grade      8 / 10
 * @comments   Need to have this comment block.
 */
//
if( !is_null($_POST))
    var_dump($_POST);

echo '<br><br><h3>POST</h3>';

$students = ["Chad", "Farhana", "Colin", "Ali", "Zein"];
$arrLength = count($students);
if ($students > 3){
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
