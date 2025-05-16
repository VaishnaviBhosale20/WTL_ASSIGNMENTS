<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "wtl");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert name into database if form is submitted
if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $sql = "INSERT INTO person_tbl (name) VALUES ('$name')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Update name in the database if form is submitted
if (isset($_POST['update'])) {
    $old_name = $_POST['old_name'];
    $new_name = $_POST['new_name'];
    $sql = "UPDATE person_tbl SET name='$new_name' WHERE name='$old_name'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Delete name from database if form is submitted
if (isset($_POST['delete'])) {
    $name = $_POST['name'];
    $sql = "DELETE FROM person_tbl WHERE name='$name'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Names</title>
</head>
<body>
    <!-- Insert Form -->
    <h2>Insert Name</h2>
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name" required>
        <button type="submit" name="insert">Insert</button>
    </form>

    <!-- Update Form -->
    <h2>Update Name</h2>
    <form method="post">
        <label>Old Name:</label>
        <input type="text" name="old_name" required>
        <label>New Name:</label>
        <input type="text" name="new_name" required>
        <button type="submit" name="update">Update</button>
    </form>

    <!-- Delete Form -->
    <h2>Delete Name</h2>
    <form method="post">
        <label>Name to delete:</label>
        <input type="text" name="name" required>
        <button type="submit" name="delete">Delete</button>
    </form>

    <!-- Display All Records -->
    <h2>Saved Names</h2>
    <?php
    // Fetch and display data from the database
    $result = $conn->query("SELECT * FROM person_tbl");

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row['name'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No names found in the database.</p>";
    }
    $conn->close();
    ?>
</body>
</html>
