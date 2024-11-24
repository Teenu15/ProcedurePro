<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];
    
    // Set the recipient email addresses
    $to = "fejishadeveb.ug22.ec@francisxavier.ac.in, manopriyam.ug22.ec@francisxavier.ac.in";
    
    // Set the email subject
    $subject = "Feedback from $name";
    
    // Compose the email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Feedback:\n$feedback\n";
    
    // Additional email headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Feedback sent successfully. Thank you!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>