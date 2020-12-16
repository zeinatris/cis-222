


<form action="index.php?page=insertcar" method="post">
    <div>
        <input type="hidden" name="page" value="insert">

        <label for="">Car Make: </label>
        <input id="name" type="text" name="make" placeholder="Make" required><br> <br>

        <label for="name">Car Model: </label>
        <input id="name" type="text" name="model" placeholder="Model" required><br> <br>

        <label for="price">Car Price: </label>
        <input id="price" type="text" name="price" placeholder="Price" required><br> <br>

        <label for="year">Car Year: </label>
        <input id="year" type="text" name="year" placeholder="Year" required><br> <br>
        <input type="submit" value="insert" name="insert">
    </div>
</form>
