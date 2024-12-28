<?php
// Get data from form
$name = $_POST['name'];
$phone = $_POST['phone']; 
$email = $_POST['email'];
$message = $_POST['message'];
$to = "anuragmishra2102@gmail.com";
$subject = "Mail From  website";
$txt = "Name = " . $name . "\r\nNumber = " . $phone . "\r\nEmail = " . $email . "\r\nMessage =" . $message;
$headers = "From: $email" . "\r\n" .
    "CC: mishraanurag2102@gmail.com";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

// Thank you message
$message = "Thank you. I will get back to you as soon as possible.";
echo "<script>alert('$message'); window.location.href = 'index.html';</script>";
?>