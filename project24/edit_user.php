<?php
    require "info_user_admin.php";
    session_start();
    if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) || 
    $_SESSION['user_role'] !== "admin") {
        header('Location: login.php');
    }
    $username = $_GET['username'];
    $user = null;
    foreach($users as $u){
        if($username === $u['username']){
            $user = $u;
        }
    }
    echo "<h2>Edit User: ".$user['name']."</h2>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <form method="POST" class="edit_user">
        <div class="content_edit">
            Name<input type="text" name="edit_name"><br>
            Email<input type="email" name="edit_email"><br>
            <br>
            <button type="submit">Save</button>
        </div>
    </form>
</body>
</html>