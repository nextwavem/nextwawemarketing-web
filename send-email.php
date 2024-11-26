if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address where you want to receive the form submissions
    $to = "nextwavemarketing01@gmail.com";
    $subject = "New message from " . $name;
    $body = "You have received a new message from your website contact form.\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Message: $message";

    // Sending the email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "There was an error sending the message.";
    }
}