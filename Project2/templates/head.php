<!--Header-->
<head>
    <title>US DEALS "R" US</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/style.css" rel="stylesheet">
</head>
<?php
$itemsCurrentlyInCart = 2;
?>
<!--logo-->
<div class="header">
<?php
    if(isset($_SESSION['user_id']) && $_SESSION['user_id']){
    ?>
        <a href="index.php?page=signout" title="SignOut">Sign Out</a>
    <?php
    }
    else{
    ?>
        <a href="index.php?page=login" title="Login / Register">Login / Register</a>
    <?php
    }
    ?>
    <img src="images/USDEALS1.png" alt="logo"/>
</div>