<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "wtl");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert name into database if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $sql = "INSERT INTO person_tbl (name) VALUES ('$name')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Name</title>
</head>
<body>
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
// Fetch and display data from the database
$result = $conn->query("SELECT * FROM person_tbl");

if ($result->num_rows > 0) {
    echo "<h2>Saved Names:</h2>";
    echo "<ul>";
    foreach ($result as $row) {
        echo "<li>" . $row['name'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No names found in the database.</p>";
}
$conn->close();
?>