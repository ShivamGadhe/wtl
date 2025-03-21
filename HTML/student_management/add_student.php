<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roll_number = $_POST["roll_number"];
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO students (roll_number, name, mobile, email, password) 
            VALUES ('$roll_number', '$name', '$mobile', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect to home page
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
