<?php 

$name  = $_POST['name'];
$email = $_POST['email'];
$sub = "Subjects";
$msg = "Message";

$result = "";
$error  = "";



require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
//smtp settings
$mail->isSMTP(); // send as HTML
$mail->Host = "smtp.gmail.com"; // SMTP servers
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "ajnasim72@gmail.com"; // Your mail
$mail->Password = 'Ajnasim016'; // Your password mail
$mail->Port = 587; //specify SMTP Port
$mail->SMTPSecure = 'tls';                               
$mail->setFrom($email,$name);
$mail->addAddress('ajnasim72@gmail.com');
$mail->addReplyTo($email,$name);
$mail->isHTML(true);
$mail->Subject='Form :' .$sub;
$mail->Body='<h3>Name :'.$name.'<br> Email: '.$email.'<br>Message: '.$msg.'</h3>';
if(!$mail->send())
{
    $error = "Something went worng. Please try again.";
}
else 
{
    $result="Thanks\t" .$name. " for contacting us.";
}
 
echo $result."".$error;


 
?>