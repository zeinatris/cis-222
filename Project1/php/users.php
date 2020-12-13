<?php
/*class Users
{

    private $pdo;

    function __construct( $p )
    {
        $this -> pdo = $p;
    }

    function InsertNewUser( $email, $password )
    {
        $qry = "INSERT INTO `Customer`
					(`CustomerID`, `Email`, `Password`, `create_date`, `update_date`, `delete_date`)
					VALUES ( NULL, ?, ?, NOW(), NOW(), NULL ); ";

        $stmt = $this -> pdo -> prepare($qry);

        return $stmt -> execute([$email, $password]);
    }

    function SelectUserByEmail( $email )
    {
        $qry = "SELECT * FROM `Customer` WHERE `Email` = ?; ";

        $stmt = $this -> pdo -> prepare($qry);

        $stmt -> execute([$email]);

        $users = array();

        while ($row = $stmt->fetch())
        {
            $users[] = $row;
        }

        if( count( $users ) > 0 )
        {
            return $users;
        }

        return false;
    }

    function SelectAllUsers( )
    {
        $qry = "SELECT * FROM `Customer` ";

        $stmt = $this -> pdo -> prepare($qry);

        $stmt -> execute([]);

        $users = array();

        while ($row = $stmt->fetch())
        {
            $users[] = $row;
        }

        if( count( $users ) > 0 )
        {
            return $users;
        }

        return false;
    }
}