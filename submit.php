<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Retrieve Form Data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    //Display submitted data
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";
}
?>