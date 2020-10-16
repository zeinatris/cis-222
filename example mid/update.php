<?php
if(isset($_POST['update']))
{
    $id = $_GET['AnimalId'];
    $at = $_GET['AnimalType'];
    $ab = $_GET['AnimalBreed'];
    $chkin = $_GET['CheckedIn'];
    $chkOut = $_GET['CheckedOut'];
    $qry1 ="UPDATE `Midterm_Animals` SET '".$at."','".$ab."','".$chkin."','".$chkOut."' ";
    $stmt = $pdo->prepare( $qry1 );
}
;