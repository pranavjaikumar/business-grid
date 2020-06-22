<?php
include("config.php");
session_start();
if (!empty($_POST['register'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hashed = password_hash($password, PASSWORD_BCRYPT);
    $confirm = $_POST['confirm'];
    $type = $_POST['type'];

    /**SQL Injection prevention
    $user = stripcslashes($user);
    $first_name = stripcslashes($first_name);
    $last_name = stripcslashes($last_name);
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    */

    // USe mysql_real_escape_string for further injection protection

    mysqli_query($link, "INSERT INTO users (first_name, last_name, email, password, type) VALUES ('$first_name', '$last_name', '$email', '$password_hashed', '$type')");
    $query = mysqli_query($link, "SELECT * FROM users WHERE email = '$email'");
    $row = mysqli_fetch_array($query);
    $_SESSION["id"] = $row['id'];
    $_SESSION["first_name"] = $row['first_name'];
    $_SESSION["last_name"] = $row['last_name'];
    //or die("Error ".mysql_error());
    if ($type == "Startup") {
        header("Location: startUpSetup.html");
    } else if ($type == "Business Professional") {
        header("Location: bpSetup.html");
    } else if ($type == "Angel Investor") {
        header("Location: aiSetup.html");
    } else {
        header("Location: loginPage.php");
    }
    exit();
} else if (!empty($_POST['startupSetup'])) {
    $id = $_SESSION['id'];
    $experience = $_POST["experience"];
    $sector = $_POST["sector"];
    $strategy = $_POST["strategy"];
    $earnings = $_POST["earnings"];
    $spending = $_POST["spending"];
    $service = $_POST["service"];
    mysqli_query($link, "INSERT INTO startup_profile VALUES ('$id', '$experience', '$sector', '$strategy', '$earnings', '$spending', '$service')");
} else if (!empty($_POST['bpSetup'])) {
    $id = $_SESSION['id'];
    $experience = $_POST["experience"];
    $sector = $_POST["sector"];
    $payment = $_POST["payment"];
    $employer = $_POST["employer"];
    $title = $_POST["title"];
    $service = $_POST["service"];
    mysqli_query($link, "INSERT INTO bp_profile VALUES ('$id', '$experience', '$sector', '$payment', '$employer', '$title', '$service')");
} else if (!empty($_POST['aiSetup'])) {
    $id = $_SESSION['id'];
    $experience = $_POST["experience"];
    $sector = $_POST["sector"];
    $commitment = $_POST["commitment"];
    $employer = $_POST["employer"];
    $title = $_POST["title"];
    $investment = $_POST["investment"];
    mysqli_query($link, "INSERT INTO ai_profile VALUES ('$id', '$experience', '$sector', '$commitment', '$employer', '$title', '$investment')");
}
$_SESSION = array();
session_destroy();
header("Location: loginPage.php");
?>