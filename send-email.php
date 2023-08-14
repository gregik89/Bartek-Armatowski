<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "gregik89@gmail.com";
    $subject = "Nowe zapytanie o zdjęcia";
    $headers = "From: $email";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    mail($to, $subject, $body, $headers);
    echo "Wysłano pomyślnie!";
}
?>
