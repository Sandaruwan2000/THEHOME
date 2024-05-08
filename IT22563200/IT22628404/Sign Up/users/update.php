<?php
// Include database connection file
include_once "../db_config.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST['id'];
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $user_role = mysqli_real_escape_string($conn, $_POST['user_role']);

    // Update user data in the database
    $query = "UPDATE singup SET full_name = '$full_name', username = '$username', email = '$email', user_role = '$user_role' WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Redirect to the user listing page with success message
        header("Location: index.php?message=User updated successfully.&success=1");
        exit;
    } else {
        // Redirect to the user listing page with error message
        header("Location: index.php?message=Failed to update user. Please try again.&success=0");
        exit;
    }
} else {
    // Redirect to the user listing page if the form is not submitted
    header("Location: index.php");
    exit;
}
