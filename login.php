<?php
include('config.php');
session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];
    //$password_hashed = password_hash($password, PASSWORD_BCRYPT);

    $query = mysqli_query($link, "SELECT * FROM users WHERE email = '$email' and password = '$password'");
    $row = mysqli_fetch_array($query);
    if ($row['email'] == $email && $row['password'] == $password) {
        $_SESSION["id"] = $row['id'];
        if ($row['type'] == "Startup") {
            header("Location: startupDashboard.php");
        } else if ($row['type'] == "Business Professional") {
            header("Location: bpDashboard.php");
        } else {
            header("Location: aiDashboard.php");
        }
    } else {
        $_SESSION["id"] = $row['id'];
        header('Location: index.php');
    }

?>