<?php
include 'db.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

echo "<h2>Student List</h2>";

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Roll Number</th><th>Name</th><th>Mobile</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["roll_number"]."</td><td>".$row["name"]."</td><td>".$row["mobile"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No students found.";
}

$conn->close();

// Redirect to index.php after 3 seconds
echo "<script>setTimeout(() => { window.location.href = 'index.php'; }, 10000);</script>";
?>
