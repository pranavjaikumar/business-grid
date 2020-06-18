<?php
    $first_name = $_POST('first_name');
    $last_name = $_POST('last_name');
    $email = $_POST('email');
    $password = $_POST('password');
    $confirm = $_POST('confirm');
    $type = $_POST('type');

    /**SQL Injection prevention 
    $user = stripcslashes($user);
    $first_name = stripcslashes($first_name);
    $last_name = stripcslashes($last_name);
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    */

    // USe mysql_real_escape_string for further injection protection

    $link = mysqli_connect("localhost", "root", "root", "business_grid");

    mysqli_query($link, "insert into users (first_name, last_name, email, password, type) values ('$first_name', '$last_name', '$email', '$password', '$type'")
        or die("Error ".mysql_error());
    
?>