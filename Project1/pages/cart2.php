<?php
if(isset($_POST['add']) && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if there is a session for the cart set already, if not then set one.
    if(!isset($_SESSION['shoppingcart'])) {
        $_SESSION['shoppingcart'] = [];
    }

    $quantity = $_POST['quantity'];

    $item = [
        "id"       => $id,
        "quantity" => $quantity
    ];

    // Now add new item to the cart
    array_push($_SESSION['shoppingcart'], $item);

    // Once added let's take the user to the cart page
    header("Location: cart.php");
} else {
    // If the add to cart button was not clicked then go back to the products page.
    header("Location: products.php");
}

if(isset($_GET['reset'])) {
    session_start();
    unset($_SESSION['shoppingcart']);
    session_destroy();
}

// Start the session for the rest of the page after destroying it.
session_start();
?>
<form action="#" method="GET">
    <label for="reset">Reset cart: </label>
    <input type="submit" value="RESET" name="reset" id="reset" />
</form>

<?php
is(isset($_SESSION['shoppingcart']) && count($_SESSION['shoppingcart']) != 0) {
$list = $_SESSION['shoppingcart'];

foreach($list as $item) {
    $id = $item['id'];

    // The MySQL database query for the items in the cart.
    $query  = "SELECT * FROM products WHERE id='$id'";
    // The connection variable is taken from the top of the page when we connected to the MySQL database
    $result = mysqli_query($connection, $query);

    // If only on item in the database has this id then proceed
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);

        $id = $row['id'];
        $name = $row['name'];
        $price = $row['price'];
        $quantity = $item['quantity'];

        // Now let's print out this item to HTML

        print(
        "<div class='product-card'>
          <a href='product-detail.php?id=$id'>
            <h3>$name</h3>
            <h4>$$price CAD</h4>
            <h4>Quantity: $quantity</h4>
          </a>
        </div>");
    }
}
else {
    print("<h2>You don't have any items in your shopping cart.</h2>");
}
