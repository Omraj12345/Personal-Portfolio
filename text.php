<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    
    $file = "contact_response.txt"; 
    
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) !== false) {
        echo "Thank you for your message! It has been submitted.";
    } else {
        echo "An error occurred while processing your message.";
    }
}
?>
