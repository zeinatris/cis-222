<?php
$cookieName = "loggedin";
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $pas = sha1(sha1($pass . "salt") . "salt");
    $qry = "SELECT * FROM `Customer` WHERE `Name`='$username' AND `Password`='$pas'";
    $stmt = $pdo->prepare($qry);
    $r1 = $stmt->execute();
    if ($r1 == 1) {
        $cookieValue = $username;
        setcookie($cookieName, $cookieValue, time() + (180), "/");
    } else {
        echo "Username or Password is incorrect";
    }
}
else if(isset($_POST['register'])){
        if(empty($_POST['name']) || empty($_POST['address']) || empty($_POST['city']) ||  empty($_POST['state']) || empty($_POST['phone']) || empty($_POST['note']) || empty($_POST['pass']))
        {
            echo "Please fill in blanks";
        }
        else
        {
            $u = $_POST['name'];
            $a = $_POST['address'];
            $c = $_POST['city'];
            $s = $_POST['state'];
            $ph = $_POST['phone'];
            $n = $_POST['note'];
            $pas1 = $_POST['pass'];
            $pas = sha1(sha1($pas1."salt")."salt");

            $qry =  " INSERT INTO `Customer`
        ( `CustomerID`,`Name`,`Address`,`City`,`State`,`PhoneNumber`,`Notes`,`Password`,`create_date`,`update_date`,`delete_date`)
					VALUES
					(NULL , '$u','$a', '$c','$s', '$ph','$n','$pas',NOW(),NOW(),NULL);  ";

            $stmt = $pdo->prepare ($qry);
            $r1 = $stmt -> execute();
            if($r1)
            {
                echo "Your account has been created";
            }
            else
            {
                echo "Your account has not been created";
            }

        }
}
?>
<h1>Login</h1>
<div>
<form action="index.php?page=login" method="post">
    <input type="hidden" name="page" value="login">
    <label for="username">UserName: </label>
    <input id="username" type="text" name="username" placeholder="Username" required><br> <br>

    <label for="password">Password: </label>
    <input id="password" type="password" name="password" placeholder="Password" required><br> <br>


    <input type="submit" value="LogIn" name="login">
</form>
</div><br><br>

<h1>Register</h1>

<div>
    <form action="index.php?page=login" method="post">
        <input type="hidden" name="page" value="login">
        <label for="name">Username: </label>
        <input id="name" type="text" name="name" placeholder="Username" required><br> <br>

        <label for="address">Address: </label>
        <input id="address" type="text" name="address" placeholder="Address" required><br> <br>

        <label for="city">City: </label>
        <input id="city" type="text" name="city" placeholder="City" required><br> <br>

        <label for="state">State: </label>
        <input id="state" type="text" name="state" placeholder="State" required><br> <br>

        <label for="phone">Phone Number: </label>
        <input id="phone" type="text" name="phone" placeholder="Phone Number" required><br> <br>

        <label for="note">Note: </label>
        <input id="note" type="text" name="note" placeholder="Note" required><br> <br>

        <label for="pass">Password: </label>
        <input id="pass" type="password" name="pass" placeholder="Password" required><br> <br>
        <input type="submit" name="register">
    </form>
</div>
