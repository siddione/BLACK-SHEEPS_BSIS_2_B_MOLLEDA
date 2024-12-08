<?php
require 'db.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $user_name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $address = $_POST['address'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    // No hashing, just store the plain password
    $plain_password = $password;

    try {
        // Check if username or email already exists
        $stmt = $conn->prepare("SELECT * FROM user_account WHERE user_name = :user_name OR email = :email");
        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "Username or email already exists. Please choose another.";
        } else {
            // Insert new user into the database with the plain text password
            $stmt = $conn->prepare("INSERT INTO user_account (first_name, middle_name, last_name, user_name, email, password, address) 
                                    VALUES (:first_name, :middle_name, :last_name, :user_name, :email, :password, :address)");
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':middle_name', $middle_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':user_name', $user_name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $plain_password); // Insert plain password
            $stmt->bindParam(':address', $address);
            $stmt->execute();
            
            header("Location: homepage.php");
                exit(); 

           //<!-- echo "Account created successfully! <a href='homepage.php'>Login here</a>.";-->
            
            
        }
    } catch (PDOException $e) {
        echo "Error inserting data: " . $e->getMessage();
    }
}
?>
