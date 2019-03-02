<?php
 $db = mysqli_connect('localhost', 'root', '', 'sih');
$nick = $_GET["data123"];

$sql1="SELECT user_name FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $username = $row1['user_name'];

        $sql1="SELECT user_state FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $userstate = $row1['user_state'];

        $sql1="SELECT user_gender FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $usergender = $row1['user_gender'];

        $sql1="SELECT user_email FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $useremail = $row1['user_email'];

        $sql1="SELECT user_nick FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $usernick = $row1['user_nick'];

        $sql1="SELECT user_hobbies FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $userhobby= $row1['user_hobbies'];

        $sql1="SELECT user_address FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $useradd = $row1['user_address'];


        $sql1="SELECT user_contact FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $usercontact = $row1['user_contact'];

        $sql1="SELECT user_desc FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $userdesc = $row1['user_desc'];

        $sql1="SELECT user_gender FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $usergender = $row1['user_gender'];

        $sql1="SELECT user_interest FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $userint = $row1['user_interest'];

        $sql1="SELECT user_skill FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $userskill = $row1['user_skill'];

        $sql1="SELECT user_city FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $userrcity = $row1['user_city'];

        $sql1="SELECT user_location FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $target = $row1['user_location'];


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> </title>
    <div id = "details"style=" position:relative;z-index:-1; text-align: justify;max-width:500px;  font-size: 16px; font-family: Courier;font-weight:bold; left:450px; ">
            <br>
            <br> <div >    <img src="abcd.jpg" style="width: 300px;height: 300px; right: -80px;position: relative;"></div>
            <br>
            <br>
           
     <div>
         <?php
            echo "Userame: " .$usernick . "<br><br>";

            echo "Name: " .$username . "<br><br>";

            echo "Email: " .$useremail . "<br><br>";
            echo "Gender: " .$usergender .  "<br><br>";
            echo "Address: " .$useradd . "<br><br>";
            echo "Hobby: " .$userhobby . "<br><br>";
            echo "Interest: " .$userint .  "<br><br>";
            echo "Skills: " .$userskill .  "<br><br>";
            echo "Contact: " .$usercontact .  "<br><br>";
            echo "City: " .$userrcity.  "<br><br>";
            echo "Description: " .$userdesc.  "<br><br>";

            ?>
     </div></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>