// send email
$to = "kuctarikj10@gmail.com"; // Hier die Empfänger-E-Mail-Adresse eintragen
$subject = "New Message from Contact Form";
$message = "Name: " . $name . "\r\nEmail: " . $email . "\r\nMessage: " . $message;
$headers = "From: " . $email;

if (mail($to, $subject, $message, $headers)) {
    // email sent successfully
    echo "<p>Thank you for your message. We will get in touch with you soon.</p>";
} else {
    // email failed to send
    echo "<p>Sorry, there was a problem sending your message. Please try again later.</p>";
}
