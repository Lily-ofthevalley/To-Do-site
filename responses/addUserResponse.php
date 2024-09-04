<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { //checks if the user got here legit
    $username = $_POST["user"]; //conferts form data to variables
    $password = $_POST["pwd"];

    try{
        require_once "../inclusions/dbh.inc.php"; //connects to database

        dbAddUser($username, $password); // Call the function

        header("Location: ../index.php"); //sends user back
        exit();
    } catch (Exception $e) { //checks and gives errors
        die("Query failed". $e->getMessage());
    }
}

else {
    header("location: ../index.php"); //sends user back
}