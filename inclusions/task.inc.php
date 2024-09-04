<?php
    require_once "dbh.inc.php"; //connects to the database

    $idTask = $_SESSION["user"]["id"];

    try {
        $sqlTask = "SELECT idTask, text, idUser FROM Task WHERE idUser = :idUser"; //Selects the task data
        $taskStmt = $pdo->prepare($sqlTask);
        $taskStmt->execute([':idUser' => $idTask]);
    } catch (PDOException $e) { //checks and gives errors
        echo "Error: " . $e->getMessage();
        die();
    }

    if ($taskStmt->rowCount() > 0) { //goes through the data and place it in the right place
        while ($row = $taskStmt->fetch(PDO::FETCH_ASSOC))
        {
            echo    '<div class="task-container">
                        <div class="task-head">
                            <a href="responses/finishTaskResponse.php?id="' . htmlspecialchars($row["idTask"], ENT_QUOTES, 'UTF-8') . '">Finished?</a>
                        </div>
                        <div class="task-text">
                            <p>' . htmlspecialchars($row["text"], ENT_QUOTES, 'UTF-8') . '</p>
                        </div>
                    </div>';
        }
    } else {
        echo "<p>No data found</p>";
    }