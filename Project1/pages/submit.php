<?php
session_start();
include('config.php');
if (isset($_POST['save_order'])) {
    if (empty($_POST['ship_name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['ship_state']) || empty($_POST['ship_city']) || empty($_POST['ship_street'])) {
        $msg = "Please ,complete order data ";
    } else {
        $ship_name = $_POST['ship_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $ship_state = $_POST['ship_state'];
        $ship_city = $_POST['ship_city'];
        $ship_street = $_POST['ship_street'];
        $order_id = $_SESSION['order_id'];
        $sql_get_save_order = "UPDATE orders set ship_name='$ship_name',email='$email',phone='$phone',ship_state='$ship_state',ship_city='$ship_city',ship_street='$ship_street' where id = $order_id ";
        $stm = $pdo -> prepare($sql_get_save_order);
        $save_order = $stm -> execute() or die($stm -> execute());
        if ($save_order) {
            print_r($_SESSION);
            unset($_SESSION['order_id']);
            print_r($_SESSION);
            die("Your order was successfully saved . It will be delivered soon <br /> Go to <a href='cart.php'>items page </a>");
        } else {
            $msg = "Cannot save your order, please try again !";
        }
    }
}
if (isset($_SESSION['order_id'])) {// getting the saved items in the existing order $order_id = mysql_real_escape_string($_SESSION['order_id']) ; $sql_get_order_items = "select * from order_items where order_id =$order_id "; $cart_data = mysqli_query($connection,$sql_get_order_items)or die(mysqli_error($connection)); $items_number = mysqli_num_rows($cart_data); }else{ header("Location:cart.php"); } if($items_number < 1){ die( "You didn't add any utems to your order ! <br /> Go to <a href='cart.php'>items page </a>"); } include("submit_order_template.php");

}