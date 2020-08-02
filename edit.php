<?php
ini_set('display_errors',0);
session_start();
include("config.php");
if($_POST['data'])
{
    $data=$_POST['data'];
    //$data = mysqli_escape_string($data);
    echo $data;
    $user_id = $_SESSION['id'];
    echo $user_id;
    $sql = "UPDATE general_profile SET about = '$data' WHERE id = '$user_id'";
    mysqli_query($link,  $sql);
}
?>