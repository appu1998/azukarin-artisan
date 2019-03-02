<?php
session_start();
$error='';
$connection = mysqli_connect('localhost', 'root', '', 'sih');


if (isset($_SESSION['username'])){
    $u=$_SESSION['username'];}


$data = $_GET["variable2"];

$sql = "DELETE  FROM  `order` WHERE user_name='$u ' AND product_name='$data' ";
$query = mysqli_query($connection, $sql);

echo "<script>
   window.location.href='userprofile.php';</script>";



?>

