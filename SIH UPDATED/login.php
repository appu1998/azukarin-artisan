<?php
session_start();
$error=''; 
$connection = mysqli_connect('localhost', 'root', '', 'sih');


if (isset($_POST['submit'])) {

    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = " invalid Details";
        echo($error);
    }
    else {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $user_type = $_POST['user_type'];

        $sql = "SELECT * FROM  `user_register` WHERE user_password='$password' AND user_nick='$username' AND user_type='$user_type' ";
        $query = mysqli_query($connection, $sql);
        $rows = mysqli_num_rows($query);



        if ($rows == 1) {
                       if ($user_type == "Artist") {
                           $_SESSION['username'] = $username;
                           $sql = "UPDATE members SET onlime = onlime+1";
                           $connection->query($sql);

                           $sql = "SELECT onlime FROM members";

                           $query = mysqli_query($connection, $sql);
                           $rows = mysqli_num_rows($query);
                           $members = $rows["onlime"];
                               echo "<script>
   window.location.href='tp.php';</script>";


            

        } else {
                           $_SESSION['username'] = $username;
                           $sql = "UPDATE members SET onlime = onlime+1";
                           $connection->query($sql);

                           $sql = "SELECT onlime FROM members";

                           $query = mysqli_query($connection, $sql);
                           $rows = mysqli_num_rows($query);
                           $members = $rows["onlime"];
            echo "<script>alert('LOGIN SUCCESSFULLY');
   window.location.href='test-login.php';</script>";
        }
    }
        else {
            echo "<script>alert(' LOGIN failed.');
   window.location.href='test.php';</script>";

        }
       
    }
}
?>

