<?php
    require_once "dbh.inc.php"; //connects to the database

    $idUser = $_SESSION["user"]["id"];
    $finished = $_GET["state"];

    try {
        $sqlTask = "SELECT idTask, text, finished, idUser FROM Task WHERE idUser = :idUser AND finished = :finished"; //Selects the task data
        $taskStmt = $pdo->prepare($sqlTask);
        $taskStmt->execute([':idUser' => $idUser, ':finished' => $finished]);
    } catch (PDOException $e) { //checks and gives errors
        echo "Error: " . $e->getMessage();
        die();
    }

    if ($taskStmt->rowCount() > 0) { //goes through the data and place it in the right place
        while ($row = $taskStmt->fetch(PDO::FETCH_ASSOC))
        {
            if($row["finished"] == ""){
            echo    '<div class="task-container">
                        <div class="task-head">
                            <a href="responses/finishTaskResponse.php?id=' . $row["idTask"] . '">Finished</a>
                        </div>
                        <div class="task-text">
                            <p>' . htmlspecialchars($row["text"], ENT_QUOTES, 'UTF-8') . '</p>
                        </div>
                    </div>';
            } else {
            echo    '<div class="task-container">
                        <div class="task-head">
                            <a>Finished</a>
                        </div>
                        <div class="task-text">
                            <p>' . htmlspecialchars($row["text"], ENT_QUOTES, 'UTF-8') . '</p>
                        </div>
                    </div>';   
            }
        }
    } else {
        echo "<p>No data found</p>";
    }