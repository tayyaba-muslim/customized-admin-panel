<?php
include('config.php');
$id = $_GET['id'];

$delete = "UPDATE `products` SET status = '0' where id = $id";

$result = mysqli_query($connection, $delete);

if (!$delete) {
    die("Query Failed");
}
header('location:trashdataproduct.php');
?>