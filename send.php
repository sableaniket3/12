<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'D:\xampp\htdocs\woo\PHPMailer-master\src/Exception.php';
require 'D:\xampp\htdocs\woo\PHPMailer-master\src/SMTP.php';
require 'D:\xampp\htdocs\woo\PHPMailer-master\src/PHPMailer.php';

if (isset($_POST["sent"])) {
    $mail= new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='aniketsable0508@gmail.com';
    $mail->Password='wqzsthfaaiqeqsph';  
    $mail->SMTPSecure='ssl';
    $mail->Port=465;
    
    $mail->setFrom('aniketsable0508@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject=$_POST["subject"];
    $mail->Body=$_POST["message"];

    $mail->send();

    echo "
    <script> alert('Sent Successfully');
    document.location.href='index.php';
    </script>
    ";

}



?>