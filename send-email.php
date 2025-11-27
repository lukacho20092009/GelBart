<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = trim($_POST["message"]);

    $to = "gelba30@gmail.com";
    $email_subject = "New contact from $name: $subject";
    $email_body = "Name: $name\nEmail: $email\n\nMessage:\n$message\n";
    $headers = "From: $email";

    if(mail($to, $email_subject, $email_body, $headers)){
        echo "Message sent successfully!";
    } else {
        echo "Something went wrong. Please try again.";
    }
}

$headers = "From: gelba30@gmail.com\r\n";
$headers .= "Reply-To: $email\r\n";

?>
