<?php
$conn = new mysqli("localhost", "root", "", "wtl");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
