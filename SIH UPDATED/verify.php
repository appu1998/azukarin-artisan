<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'sih');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css"> -->
    <script src="main.js"></script>
</head>
<body>
    

<div class='authorise'>
    <?php
        $adminsql="SELECT * FROM IMAGE where location_gi != ''";
        $result = mysqli_query($db,$adminsql);
        while($row = mysqli_fetch_array($result)){
            echo"<table>";
            echo"
                <th>
                <img src='$row[location]' style='width: 200px; height:200px;'>
                </th>
                <th>
                <form action='verification.php?variable=$row[location_gi]' method='POST'>
                <img style='width: 200px; height:200px;' src='$row[location_gi]'>
                </th>
                
                <th><button href='verification.php'>APPROVE</button></th>
                </form>
                ";
            echo "</table>";
        }
    ?>
</div>
</body>
</html>