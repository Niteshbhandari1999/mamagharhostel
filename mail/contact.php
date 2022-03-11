<?php
if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$Mobile_No = strip_tags(htmlspecialchars($_POST['Mobile No']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to ="bhandarinitesh12@gmail.com"; // Change this email to your //
$subject = "$m_subject:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nSubject: $m_subject\n\nMessage: $message";
$header = "From:bhandarinitesh12@gmail.com";
$header .= "Reply-To:bhandarinitesh12@gmail.com";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
