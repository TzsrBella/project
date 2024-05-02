<?php
session_start();

// AdminTozer123
// TozserBella123

// Clean Data
function cleanData($data)
{
    return htmlspecialchars(trim(stripslashes($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = cleanData($_POST["username"]);
    $password = cleanData($_POST["password"]);

    if ($username == "AdminTozer123" && password_verify($password, '$2y$10$fvGFiTlKqhK2cklJnIACHuxW8091au.I14S566wSBgV5tPcYxjID.')) {
        // Correct credentials
        $_SESSION["admin_connect"] = 1;
        header("Location: /admin/dashboard", true, 303);
        exit();
    } else {
        header("Location: /admin/login?error=1", true, 303);
        die();
    }
}
