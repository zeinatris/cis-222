
<form action="index.php?page=checkout" method="post" name="page">
    <div>

        <label for="name">Name: </label>
        <input id="name" type="text" name="name1" placeholder="Name" required><br> <br>

        <label for="Address">Address: </label>
        <input id="Address" type="text" name="address1" placeholder="Address" required><br> <br>

        <label for="city">City: </label>
        <input id="city" type="text" name="city1" placeholder="City" required><br> <br>

        <label for="phone">Phone Number: </label>
        <input id="phone" type="text" name="phone1" placeholder="Phone Number" required><br> <br>
        <button>CheckOut</button>
    </div>
</form>

<?php
    if(isset ( $_SESSION['checkout_message'])) {
        echo  $_SESSION['checkout_message'];
    }
    ?>