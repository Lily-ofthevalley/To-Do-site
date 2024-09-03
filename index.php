<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Lilith" />
        <link rel="icon" type="image/x-icon" href="Images/favicon.ico" />
        <title>To-Do</title>
        <link href="Styles/style.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="main.js"></script>
    </head>
    <body>

    <!-- Header -->
    <header>
        <nav class="header-container">
            <div class="header-name">
                <img src="Images/checklist.png" alt="Logo" id="header-logo">
                <p>To-Do</p>
            </div>
            <a id="header-login">Sign-up/Login</a>
        </nav>
    </header>

    <div class="ToDo-body">
        <!-- Side bar -->
        <div class="sideBar-container">
                <a class="sideBar-text" id="sideBar-ToDo" href="">To-Do</a>
                <a class="sideBar-text" id="sideBar-finished" href="">Finished</a>
                <p class="sideBar-text" id="sideBar-addTask">Add Task</p>
        </div>

        <div class="content-container">
            <!-- Hidden things -->
            <div class="addTask-container">
                <form action="" method="POST" class="addTask-form">
                    <textarea class="addTask-write" type="text" name="task" value="" placeholder="Write task"></textarea><br>
                    <input class="addTask-send" type="submit" name="button" value="Add task">
                </form>
            </div>

            <div class="login-container">
                <form action="" method="POST" class="login-form">
                    <input class="login-user" type="text" name="user" value="" placeholder="Username"><br>
                    <input class="login-psw" type="text" name="psw" value="" placeholder="Password"><br>
                    <input class="login-send" type="submit" name="button" value="Login">
                </form>
                <p id="signUp-link" href="">Don't have a account sign up now!</p>
            </div>

            <div class="signUp-container">
            <form action="" method="POST" class="signUp-form">
                    <input class="signUp-user" type="text" name="user" value="" placeholder="Username"><br>
                    <input class="signUp-psw" type="text" name="psw" value="" placeholder="Password"><br>
                    <input class="signUp-send" type="submit" name="button" value="sign Up">
                </form>
            </div>

            <!-- Tasks -->
             <div class="task-body">
                <div class="task-container">
                    <div class="task-head">
                        <p>Finished?</p>
                        <img src="Images/edit.png" alt="edit icon">
                    </div>
                    <div class="task-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore aspernatur maiores porro iure ut deleniti distinctio consequuntur perspiciatis facere aliquid?</p>
                    </div>
                </div>
                <div class="task-container">
                    <div class="task-head">
                        <p>Finished?</p>
                        <img src="Images/edit.png" alt="edit icon">
                    </div>
                    <div class="task-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore aspernatur maiores porro iure ut deleniti distinctio consequuntur perspiciatis facere aliquid?</p>
                    </div>
                </div>
                <div class="task-container">
                    <div class="task-head">
                        <p>Finished?</p>
                        <img src="Images/edit.png" alt="edit icon">
                    </div>
                    <div class="task-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore aspernatur maiores porro iure ut deleniti distinctio consequuntur perspiciatis facere aliquid?</p>
                    </div>
                </div>
                <div class="task-container">
                    <div class="task-head">
                        <p>Finished?</p>
                        <img src="Images/edit.png" alt="edit icon">
                    </div>
                    <div class="task-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore aspernatur maiores porro iure ut deleniti distinctio consequuntur perspiciatis facere aliquid?</p>
                    </div>
                </div>
                <div class="task-container">
                    <div class="task-head">
                        <p>Finished?</p>
                        <img src="Images/edit.png" alt="edit icon">
                    </div>
                    <div class="task-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore aspernatur maiores porro iure ut deleniti distinctio consequuntur perspiciatis facere aliquid?</p>
                    </div>
                </div>
                <div class="task-container">
                    <div class="task-head">
                        <p>Finished?</p>
                        <img src="Images/edit.png" alt="edit icon">
                    </div>
                    <div class="task-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore aspernatur maiores porro iure ut deleniti distinctio consequuntur perspiciatis facere aliquid?</p>
                    </div>
                </div>
                <div class="task-container">
                    <div class="task-head">
                        <p>Finished?</p>
                        <img src="Images/edit.png" alt="edit icon">
                    </div>
                    <div class="task-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore aspernatur maiores porro iure ut deleniti distinctio consequuntur perspiciatis facere aliquid?</p>
                    </div>
                </div>
                <div class="task-container">
                    <div class="task-head">
                        <p>Finished?</p>
                        <img src="Images/edit.png" alt="edit icon">
                    </div>
                    <div class="task-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore aspernatur maiores porro iure ut deleniti distinctio consequuntur perspiciatis facere aliquid?</p>
                    </div>
                </div>
             </div>

        </div>

    </div>

    </body>
</html>