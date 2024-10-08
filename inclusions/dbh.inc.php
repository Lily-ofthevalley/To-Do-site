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

/**
 * Insert a new user into the database.
 */
function dbAddUser($username, $password)
{
    global $pdo;

    $hashed_pw = password_hash($password, 0);

    // Commit to database
    $stmt = $pdo->prepare("INSERT INTO User(username, password) VALUES (?, ?)");
    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $hashed_pw);
    $stmt->execute();
}


    ////////////////
    ///// TASK /////
    ////////////////

    function dbAddTask($task, $idUser, $finished)
{
    global $pdo;

    // Commit to database
    $stmt = $pdo->prepare("INSERT INTO Task(text, idUser, finished) VALUES (?, ?, ?)");
    $stmt->bindParam(1, $task);
    $stmt->bindParam(2, $idUser);
    $stmt->bindParam(3, $finished);
    $stmt->execute();
}

    function dbTaskUpdate($idTask, $finished)
{
    global $pdo;
    
    $sql = "UPDATE Task SET finished = :finished WHERE idTask = :idTask";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':finished', $finished);
    $stmt->bindParam(':idTask', $idTask);
    $stmt->execute();
}

