<?php
$pdo = dbConnect();

function dbConnect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ToDoDB";

    try {
        // create connection
        $dsn = "mysql:host=$servername;dbname=$dbname;port=3306";
        $pdo = new PDO($dsn, $username, $password);

        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
        return $pdo;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage() . "\n";
        return null;
    }
}

    ////////////////
    ///// USER /////
    ////////////////




    ////////////////
    ///// TASK /////
    ////////////////



    