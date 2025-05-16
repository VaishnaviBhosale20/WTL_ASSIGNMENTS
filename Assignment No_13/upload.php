<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Handle file upload
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
    
    // Move the uploaded file to the "uploads" directory
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
        echo "File uploaded successfully!";
    } else {
        echo "Error uploading file.";
    }
}
?>
