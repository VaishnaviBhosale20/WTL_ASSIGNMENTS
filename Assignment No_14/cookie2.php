<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the value from the form
    $cookie_name = "user";
    $cookie_value = $_POST["username"];
    setcookie($cookie_name, $cookie_value, time() + 20, "/"); // 20 seconds
}

// Check if the cookie is set
if (isset($_COOKIE["user"])) {
    echo "Cookie 'user' is set!<br>";
    echo "Value: " . $_COOKIE["user"];
} else {
    echo "Cookie 'user' is not set!";
}
?>

<!-- HTML Form -->
<form method="post" action="">
    <label for="username">Enter your name:</label>
    <input type="text" id="username" name="username" required>
    <button type="submit">Submit</button>
</form>