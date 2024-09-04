<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["user"];
    $pwd = $_POST["pwd"];

    require_once "../Inclusions/dbh.inc.php"; // Connect to the database

    $loginQuery = "SELECT idUser, username, password FROM User WHERE username = :username";
    $loginStmt = $pdo->prepare($loginQuery);
    $loginStmt->execute([':username' => $username]);

    $row = $loginStmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        var_dump($row);
        // Verify the entered password against the stored hashed password
        if (password_verify($pwd, $row["password"])) {
            $_SESSION["user"] = array("username" => $row["username"], "id" => $row["idUser"]);
            header("Location: ../index.php?state=");
            exit();
        } else {
            header("Location: ../index.php?error=incorrect_password");
            exit();
        }
    } else {
        header("Location: ../index.php?error=user_not_found");
        exit();
    }
} else {
    header("Location: ../index.php?idk");
    exit();
}

