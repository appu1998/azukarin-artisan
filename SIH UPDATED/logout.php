<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'sih');
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset(); 
$sql = "UPDATE members SET onlime = onlime-1";
$db->query($sql);

// destroy the session 
session_destroy();
echo "<script type='text/javascript'>location.href = 'test.php';</script>";
?>

</body>
</html>