<?php

/**
 * qzX.txt
 *
 * Have a great winter break!
 *
 * @category    Cumulative
 * @package     Quiz 10
 * @author      Zein Atris <zhatris@hawkmail.hfcc.edu>
 * @version     2020.12.13
 * @grade
 */

// 1. (4pts) Create a class below called DatabaseManager.
//              On construct this class should create a database connection.
//              It should also store this connection in a private property named connection.

include('../../../creds.php');

class DatabaseManager
{
    private $connection;

    function __construct()
    {
        try {
            $dsn = "mysql:host=" . HOST . ";dbname=" . DATABASE . ";charset=" . CHARSET;
            $this->connection = new PDO($dsn, USERNAME, PASSWORD);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->connection->setAttribute(save_queries, TRUE);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }



// 2. (3pts) Add a method to the DatabaseManager called query.
//              This method should accept a query string as a parameter.
//              This method should then use its connection to execute the query.
// 4. (3pts) Add a try/catch to the query method.
//              If caught, echo a simple error message and terminate the program.

    function query($qry)
    {
        try {
            return $this->connection->query($qry);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

    }

    // B. (3pts) Add a method to the DatabaseManager called results.
//              If the last query was a SELECT, this should return all returned rows.
//              If the last query was an UPDATE or DELETE, it should return the number of affected rows.
//              If the last query was an INSERT, it should return last inserted row id.

    function results()
    {

        $q = $this->connection->last_query();
        $tq = explode(' ', trim($q));

        if ($tq == "UPDATE") {
            $this->connection->prepare($q)->execute();
            $this->connection->$tq->rowCount();
        }
        if ($tq == "INSERT") {
            $this->connection->lastInsertId();
        }
        if ($tq == "SELECT") {
            $r = $this->connection->query($q);

            while ($row = $r->fetch()) {
                echo $row['FIELD'] . "<br>";
            }

        }

    }

}