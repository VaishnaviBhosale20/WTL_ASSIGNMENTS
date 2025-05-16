<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve and display form data
        $name = $_POST['name'];
        $email =$_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];

        echo "<h2>Form Data Submitted:</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Address:</strong> $address</p>";
        echo "<p><strong>Phone Number:</strong> $phone</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        
    } 
    ?>
        
    
</body>
</html>