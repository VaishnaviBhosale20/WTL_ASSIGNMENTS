<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in session variables
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    echo "Session variables are set!";
}
if (isset($_GET['logout'])) {
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Example</title>
</head>
<body>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit">Submit</button>
    </form>
    <a href="?logout=true">Logout</a>
</body>
</html>