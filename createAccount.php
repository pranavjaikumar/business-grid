<?php
    $count = 0;
    $user = $_POST('user');
    $first_name = $_POST('first_name');
    $last_name = $_POST('last_name');
    $email = $_POST('email');
    $password = $_POST('password');
    $confirm = $_POST('confirm_password');
    $type = $_POST('type');
    if (password != confirm) {
        header("Location: register.html");
        exit;
    }

    // SQL Injection prevention 
    $user = stripcslashes($user);
    $first_name = stripcslashes($first_name);
    $last_name = stripcslashes($last_name);
    $email = stripcslashes($email);
    $password = stripcslashes($password);

    // USe mysql_real_escape_string for further injection protection

    mysql_connect("localhost", "root", "root");
    mysql_select_db("business_grid");

    mysql_query("insert into users values ('$count++', '$first_name', '$last_name', '$email', '$password', '$type'")
        or die("Error ".mysql_error());
    header("Location: index.html");
?>