<?php
session_start();

if(isset($_GET['do'])){ // check request from page forms
    $action = $_GET['do'];
    //Array ( [quantity] => 1 [item_number] => 2 [item_name] => pant [item_price] => 38 ) Array ( [do] => add )
    switch($action){
        case"add":
            // code of adding new items to the order
            // first get item details in variables
            $item_number = $_POST['item_number'];
            $item_name = $_POST['item_name'];
            $item_price = $_POST['item_price'];
            $quantity = $_POST['quantity'];
            // check if there is an existing order from the session where we save session id
            if(!isset($_SESSION['order_id']))
            { // if there isn't an order, make new order in orders table and save its id in session array

                $today = date('Y-m-d : h-i-s');
                $sql_order = "INSERT INTO orders (date) VALUES ('$today')";
                $stm = $pdo -> prepare($sql_order);
                $result = $stm -> execute() or die($stm -> errorCode());
                $order_id = $pdo -> lastinsertId();
                $_SESSION['order_id'] = $order_id;

            }
            else
            {
                //if there is an order , count items in order has the same type of added item
                $order_id = $_SESSION['order_id'];
                $sql_item_quantity = "select count(*) as quantity  from order_items where order_id =$order_id and item_number = $item_number";
                $stm = $pdo -> prepare($sql_item_quantity);
                $result = $stm -> execute()or die($stm -> execute());
                while ($row = $stm -> fetch())
                {

                $item_quantity = $row['quantity'];//$result->fetch_assoc()['quantity'];//$row[0];

                }
            }
            //now we will add the new item <br>
            // if there is one or more from this item we only update the record of existed item .add one to the quantity and add an item price to the existing cost
            if( intval($item_quantity) >= 1 ){
                $sql_add_item = "Update order_items set quantity=quantity+1 , price = price + $item_price";

            }else{
                // there is no items in the same type .so,we make a new record to add the item
                $sql_add_item = "INSERT INTO order_items (order_id,item_number,item_name,quantity,price ) VALUES ($order_id,$item_number,'$item_name',$quantity,$item_price)";

            }
            $stm = $pdo -> prepare($sql_add_item);
            $result = $stm -> execute() or die($stm -> errorCode());
            if($result){
                $msg = "item was add";
            }else{
                $msg = "Cannot add item";
            }
            break;
        case"delete":
            // Code of deleting a spesific items details from order
            $item_id = intval($_GET['id']);
            $order_id = $_SESSION['order_id'];
            $sql_item_delete = "DELETE FROM order_items where order_id = $order_id and id = $item_id ";
            $stm = $pdo -> prepare($sql_item_delete);
            $result = $stm -> execute()or die($stm -> errorCode().'-'. $sql_item_delete);
            if($result){
                $msg = "item was deleted";
            }else{
                $msg = "Cannot delete item";
            }

            break;
        case"delete_all":
            // Code of deleting all items from order
            $order_id = $_SESSION['order_id'];
            $sql_item_delete = "DELETE FROM order_items where order_id = $order_id ";
            $stm = $pdo -> prepare($sql_item_delete);
            $result = $stm -> execute() or die($stm -> errorCode());
            if($result){
                $msg = "Cart is empty";
            }else{
                $msg = "Cannot empty cart";
            }
            break;
        case"add_one":
            //  Code of increasing the quantity of an item by one
            $item_id = intval($_GET['id']);
            $order_id = $_SESSION['order_id'];
            $sql_add_item = "Update order_items set quantity=quantity+1 , price = ( price /( quantity - 1) ) * quantity where id =$item_id";
            $stm = $pdo -> prepare($sql_add_item);
            $result = $stm -> execute()or die($stm -> errorCode().'-'. $sql_add_item);
            if($result){
                $msg = "item was added";
            }else{
                $msg = "Cannot add item";
            }

            break;
        case"remove_one":
            //  Code of decreasing the quantity of an item by one
            $item_id = intval($_GET['id']);
            $order_id = $_SESSION['order_id'];
            $sql_remove_item = "Update order_items set quantity=quantity-1 , price = ( price /( quantity + 1) ) * quantity where id =$item_id";
            $stm = $pdo -> prepare($sql_remove_item);
            $result = $stm -> execute()or die($stm ->errorCode().'-'. $sql_remove_item);
            if($result){
                $msg = "item was removed";
            }else{
                $msg = "Cannot remove item";
            }
            break;


    }

}

if(isset($_SESSION['order_id'])){
    // getting the saved items in the existing order
    $order_id = $_SESSION['order_id'];
    $sql_get_order_items = "select * from order_items where order_id =$order_id";
    $stm = $pdo -> prepare($sql_get_order_items);
    $cart_data = $stm -> execute()or die($stm -> errorCode());
    $items_number = mysqli_num_rows($cart_data);

}

// get the view code from template file
include("cart_template.php");

?>