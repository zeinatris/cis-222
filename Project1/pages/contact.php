<?php    if(isset($_POST['insert'])){
    if(empty($_POST['name'] || empty($_POST['email']) || empty($_POST['message'])))
    {
        echo "Please fill in blanks";
    }
    else
    {
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Message = $_POST['message'];

        $qry =  " INSERT INTO `Contact`
                   ( `ContactId`,`Name`,`Email`,`Message`,`create_date`,`update_date`,`delete_date`)
					VALUES
				(NULL ,'$Name', '$Email','$Message',Now(),NOW(),NULL);  ";

        $stmt = $pdo->prepare ($qry);
        $r1 = $stmt -> execute();
        if($r1)
        {
            echo "Data has been inserted";
        }
        else
        {
            echo "Data has not been inserted";
        }
        var_dump($r1);
    }

}
?>

</div>
<div class="b">
    <h2>CONTACT US</h2>

    <p>Customer feedback is the lifeblood of our business. Tell us what’s on your mind, good or bad.</p>

    <p>We respond to all customer feedback and look forward to hearing from you!</p>

    <p>Fields marked with an * are required</p>


    <form action="index.php?page=contact" method="post">
        <input type="hidden" name="page" value="contact">
        <label for="name">Name: </label>
        <input id="name" type="text" name="name" placeholder="Name" required><br> <br>

        <label for="email">Email: </label>
        <input id="email" type="text" name="email" placeholder="Email" required><br> <br>
        <div class="c">
            <label for="text" >Message</label><br>
            <textarea name="message" rows="4" cols="50" id="text" placeholder="Message"></textarea><br>
        </div>
        <input type="submit" name="insert">
    </form>
</div>

