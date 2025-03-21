<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roll_number = $_POST["roll_number"];

    $sql = "DELETE FROM students WHERE roll_number='$roll_number'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect to home page
        exit();
    } else {
        echo "Error deleting student: " . $conn->error;
    }
}
?>

<form method="POST">
    <input type="text" name="roll_number" placeholder="Enter Roll Number to Delete" required>
    <button type="submit">Delete</button>
</form>
