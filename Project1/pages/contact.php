<?php
if( isset($_GLOBAL['Contact_message']) )
{
    $_GLOBAL = ['Contact_message'];
    echo $_GLOBAL;
}
?>

</div>
<div class="b">
    <h2>CONTACT US</h2>

    <p>Customer feedback is the lifeblood of our business. Tell us what’s on your mind, good or bad.</p>

    <p>We respond to all customer feedback and look forward to hearing from you!</p>

    <p>Fields marked with an * are required</p>


    <form action="index.php" method="get">
        <input type="hidden" name="page" value="contact">
        <label for="name">Name: </label>
        <input id="name" type="text" name="name" placeholder="Name" required><br> <br>

        <label for="email">Email: </label>
        <input id="email" type="text" name="email" placeholder="Email" required><br> <br>
        <div class="c">
            <label for="text" >Message</label><br>
            <textarea name="message" rows="4" cols="50" id="text" placeholder="Message"></textarea><br>
        </div>
        <input type="submit">
    </form>
</div>

