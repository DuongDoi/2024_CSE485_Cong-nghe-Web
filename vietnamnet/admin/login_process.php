<?php
    require_once "../functions.php";
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_found = false;

    //check if username exists
    
    if (empty($username) || empty($password)) {
        echo "Invalid username or password";
    }
    else {
        $user_found = true;
        setcookie('logged_in', true, time()+60*60*24*30, "/");
        header('Location: dashboard.php');
    }
    
?>