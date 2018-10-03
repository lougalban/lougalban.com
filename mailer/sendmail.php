<?php
header("Access-Control-Allow-Origin: *");

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_send = $_POST['email_send'];
$subject_send = $_POST['subject_send'];

$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: lougalban '$email_send'' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

$msg_content = 'Name: '.$name.' <br> Email: '.$email.' <br><br> Subject: '.$subject.' <br> Message: '.$message.'';

// send email
$result = mail($email_send,$subject_send,$msg_content);

echo json_encode($result);