<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "kuctarikj10@gmail.com"; // Ihre E-Mail-Adresse hier einfügen
    $body = "Name: $name\nEmail: $email\n\nSubject: $subject\n\nMessage: $message";
    mail($to, $subject, $body);
}
?>
