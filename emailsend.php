
<?php
if (isset($_POST['send'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "receiver@example.com";   // change this email
    $subject = "Message from Contact Form";

    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
</head>
<body>

<h2>Send Email Form</h2>

<form action='
<?php
htmlspecialchars($_SERVER['PHP_SELF'])
?>' method="post">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Message:</label><br>
    <textarea name="message" rows="5" required></textarea><br><br>

    <input type="submit" name="send" value="Send Email">
</form>

</body>
</html>
