<?php
include("config.php");
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

mysqli_query($link, "insert into users (first_name, last_name, email, password, type) values ('$first_name', '$last_name', '$email', '$password_hashed', '$type')");
//or die("Error ".mysql_error());
header('Location: loginPage.php');
if ($type == "Startup") {
    header("Location: startUpSetup.html");
} else if ($type == "Business Professional") {
    header("Location: bpSetup.html");
} else if ($type == "Angel Investor") {
    header("Location: aiSetup.html");
} else {
    header("Location: loginPage.php");
}
?>