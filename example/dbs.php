<?php

if(isset($_POST['insert'])){var_dump($_POST['insert']);
    if(empty($_POST['username'] || empty($_POST['email'])))
    {
        echo "Please fill in blanks";
    }
    else
    {
       $user = $_POST['username'];

       $email = $_POST['email'];
       $qry =  "INSERT INTO `P` (NAME,Email) VALUES ('$user','$email')";

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
