<?php
// signup.php

// Include the database configuration file
include 'db_config.php';


$response = array();
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $full_name = mysqli_real_escape_string($conn, $_POST["full_name"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = $_POST["password"];
    $user_role = $_POST["user_role"];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Validate password strength
    if (strlen($password) < 8) {
        echo "Password should be at least 8 characters long.";
        exit;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO singup (full_name, username, email, password, user_role) VALUES ('$full_name', '$username', '$email', '$hashed_password', '$user_role')";

    if (mysqli_query($conn, $sql)) {
        // Success message
        $response["success"] = true;
        $response["message"] = "Sign up successful.";
    } else {
        echo "Error: User registration failed.";
        // Error message
        $response["success"] = false;
        $response["message"] = "Sign up failed. " . $e->getMessage();
    }

    // Close the database connection
    mysqli_close($conn);
}

// Send the response as JSON
header("Content-Type: application/json");
echo json_encode($response);
