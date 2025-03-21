<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["search"])) {
    $roll_number = $_POST["roll_number"];
    $sql = "SELECT * FROM students WHERE roll_number='$roll_number'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $student = $result->fetch_assoc();
    } else {
        echo "No student found with Roll Number: $roll_number";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $roll_number = $_POST["roll_number"];
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];

    $sql = "UPDATE students SET name='$name', mobile='$mobile', email='$email' WHERE roll_number='$roll_number'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect to home page
        exit();
    } else {
        echo "Error updating student: " . $conn->error;
    }
}
?>

<form method="POST">
    <input type="text" name="roll_number" placeholder="Enter Roll Number to Update" required>
    <button type="submit" name="search">Search</button>
</form>

<?php if (isset($student)) { ?>
    <form method="POST">
        <input type="hidden" name="roll_number" value="<?= $student['roll_number']; ?>">
        <input type="text" name="name" value="<?= $student['name']; ?>" required>
        <input type="text" name="mobile" value="<?= $student['mobile']; ?>" required>
        <input type="email" name="email" value="<?= $student['email']; ?>" required>
        <button type="submit" name="update">Update</button>
    </form>
<?php } ?>
