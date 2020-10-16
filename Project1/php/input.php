<?php
if( isset($_GET['action']) )
{
    if( $_GET['action'] == 'Contact' )
    {
        var_dump($_GET);
        var_dump($pdo);
    }
    else if( $_GET['action'] == 'add_Contact' )
    {
        $qry = " INSERT INTO `Contact`
        (`ContactId`,`Name`,`Email`,`Message`,`create_date` ,`update_date` ,`delete_date`)
					VALUES
					( NULL, ?,?,? NOW(), NOW(), NULL );  ";

        $stmt = $pdo->prepare( $qry );
        $r = $stmt -> execute([$_GET['name'],$_GET['email'],$_GET['message']]);

        if( $r )
        {
           
            $_GLOBAL['Contact_message'] = '<div class="alert alert-success" role="alert">Location Saved!</div>';
        }

    }
}
