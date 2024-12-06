<?php
require 'db.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user inputs from the login form
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    try {
        // Get user record from database by user_name
        $stmt = $conn->prepare("SELECT * FROM user_account WHERE user_name = :user_name");
        $stmt->bindParam(':user_name', $user_name);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Compare the entered password with the stored plain-text password
            if ($password === $user['password']) {
                // Password matches, successful login
                echo "Login successful!";
                // Redirect to a new page or start the session
            } else {
                // Incorrect password
                echo "Incorrect password.";
            }
        } else {
            // User not found
            echo "No user found with that username.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>