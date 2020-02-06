<?php
session_start();
$conn=mysqli_connect("localhost","root","","DBS")
or die('Error connecting to MySQL server.'); 
use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'Exception.php';
	require 'PHPMailer.php';
	require 'SMTP.php';
function err($n)
{
$n=trim($n);//remove extra tab spaces
$n=stripslashes($n);//remove blackslashes from input to avoid xss attack
$n=htmlspecialchars($n);//convert html to plain text
return $n;
}

$tempid=$_GET['tempid'];
 $subject="New Registration";
$body="Hello Sir! \n
There is are new registrations  for the visitors hostel and MDP.Kindly review them for them to be forwarded to the Deputy Registrar.";


	

$mail = new PHPMailer(true);

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'fandom360mail@gmail.com';          // SMTP username
$mail->Password = 'fandom@360!'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('fandom360mail@gmail.com', 'Fandom360');
$mail->addReplyTo('fandom360mail@gmail.com', 'Fandom360');
$mail->addAddress('saniya.rishi@gmail.com');   // Add a recipient

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<p>' . $body . '</p>';
$mail->Subject = $subject;
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
echo "<script>window.location.href='thankyou.php?tempid=" . $tempid . "';</script>";
}
?>
