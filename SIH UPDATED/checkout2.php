<?php
  $db = mysqli_connect('localhost', 'root', '', 'sih');
session_start();
/* session_start(); */


if (isset($_SESSION['username']) && isset($_POST['submit'])){
    $u=$_SESSION['username'];
   // echo $u;
}

 $data3 = $_GET["variable4"];
 //echo $data3;
 
$sql = "INSERT INTO `order` (user_name,product_name) VALUES(
    '$u','$data3')";
   $query = mysqli_query($db, $sql);
   
$Firstname = $_POST['firstname'];
$Email = $_POST['email'];
$state = $_POST['state'];
$address = $_POST['address'];;
$zip = $_POST['zip'];;
$city = $_POST['city'];;
$sql1="INSERT INTO `checkout` (user_name,product_name,full_name,email,address,state,city,zip) VALUES(
 '$u','$data3','$Firstname','$Email','$address','$state','$city','$zip')";

     if(!mysqli_query($db,$sql1))
    {  echo "<script>alert('Sorry Transaction Failed');
  </script>"; 
}
     else{
        echo "<script>alert('Thank you');</script>";

    } 

?>

<?php
if (isset($_SESSION['username'])){
    $u=$_SESSION['username'];}

$db=mysqli_connect('localhost','root','','sih');
$sql1="SELECT * from user_register where user_nick='$_SESSION[username]'";
$result1=mysqli_query($db,$sql1);
//echo mysqli_num_rows($result1);
while ($row = mysqli_fetch_array($result1)){
  //  echo $row[user_email];
    $result2 = $row['user_email'];
}
//echo $result2;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'teamazukarin@gmail.com';                 // SMTP username
    $mail->Password = '$ies@zukr1n';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    
    //Recipients
    $mail->setFrom('teamazukarin@gmail.com', 'Team Azukarin');
    $mail->addAddress($result2, 'user');     // Add a recipient
    //$mail->addAddress($result1);               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Order Placement Confirmation';
    $mail->Body    = 'We have placed your order for Item '.$data3.'<br>If you have any queries mail us teamazukarin@gmail.com and we will contact you<br>Thankyou for Shopping with us.';
    $mail->AltBody = 'Regards,<br>Team Azukarin.';

    $mail->send();
    //echo 'Message has been sent';
    echo "Processing your request...";
    echo "<script>
   window.location.href='shipping.php';</script>";
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}