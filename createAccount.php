<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
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

    include("config.php");
    
    mysqli_query($link, "insert into users (first_name, last_name, email, password, type) values ('$first_name', '$last_name', '$email', '$password_hash', '$type')");
        //or die("Error ".mysql_error());
    header('Location: index.php');
?>