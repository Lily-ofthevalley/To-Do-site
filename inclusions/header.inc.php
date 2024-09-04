<?php

if (isset($_SESSION["user"])) {
    echo '<a id="header-logout" href="responses/logoutResponse.php">Logout</a>';
} else {
    echo '<a id="header-login">Sign-up/Login</a>';
}