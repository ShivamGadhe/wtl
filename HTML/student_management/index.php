<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

    <h2 class="text-center">Student Management System</h2>

    <form action="add_student.php" method="POST" class="mb-3">
        <input type="text" name="roll_number" class="form-control mb-2" placeholder="Roll Number" required>
        <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
        <input type="text" name="mobile" class="form-control mb-2" placeholder="Mobile Number" required>
        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
        <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>

        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>

    <a href="display_students.php" class="btn btn-success">Display Students</a>
    <a href="update_student.php" class="btn btn-warning">Update Student</a>
    <a href="delete_student.php" class="btn btn-danger">Delete Student</a>

</body>
</html>
