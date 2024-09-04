<?php
    $idTask = $_GET['id']; //conferts form data to variables
    $finished = "yes";

    try{
        require_once "../inclusions/dbh.inc.php"; //connects to database

        dbTaskUpdate($idTask, $finished); // Call the function

        header("Location: ../index.php?state="); //sends user back
        exit();
    } catch (Exception $e) { //checks and gives errors
        die("Query failed". $e->getMessage());
    }