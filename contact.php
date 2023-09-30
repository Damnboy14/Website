<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    
    // You can customize the email message and recipient here
    $to = "nathans0004@gmail.com";
    $subject = "Contact Us Form Submission";
    $message = "Name: $name\nEmail: $email\nPhone: $phone";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for contacting us! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
