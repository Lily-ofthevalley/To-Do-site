<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") { //checks if the user got here legit
    $task = $_POST["task"]; //conferts form data to variables
    $idUser = $_SESSION["user"]["id"];
    $finished = "";

    try{
        require_once "../inclusions/dbh.inc.php"; //connects to database

        dbAddTask($task, $idUser, $finished); // Call the function

        header("Location: ../index.php?state="); //sends user back
        exit();
    } catch (Exception $e) { //checks and gives errors
        die("Query failed". $e->getMessage());
    }
}

else {
    header("location: ../index.php?state="); //sends user back
}