<?php
include('config.php');
$user_id = $_GET['id'];

$delete = "UPDATE `register` SET status = '1' where id = $user_id";

$result = mysqli_query($connection, $delete);

if (!$delete) {
    die("Query Failed");
}
header('location:viewuser.php');
?>