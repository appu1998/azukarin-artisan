<?php
$db = mysqli_connect('localhost', 'root', '', 'sih');
$data = $_GET["variable"];
echo $data;
$verify="update image set verified = 1 WHERE location_gi='$data'";
mysqli_query($db,$verify);
echo"<script>window.location.href='xyz.php'</script>";
