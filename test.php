<?php
    include('config.php');
    if ($link) {
        $query = mysqli_query($link, "SELECT * FROM users");
        $row = mysqli_fetch_array($query);
        echo "Database connection successful!";
        echo "The user's name is " . $row['first_name'] . " " . $row['last_name'];
    } else {
        echo "Database connection failed.";
    }
?>