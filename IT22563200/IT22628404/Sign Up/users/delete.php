<?php
// Include database connection file
include_once "../db_config.php";

// Check if the user ID is provided via GET parameter
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the user from the database
    $query = "DELETE FROM singup WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Redirect to the user listing page with success message
        header("Location: index.php?message=User deleted successfully.&success=1");
        exit;
    } else {
        // Redirect to the user listing page with error message
        header("Location: index.php?message=Failed to delete user. Please try again.&success=0");
        exit;
    }
} else {
    // Redirect to the user listing page if the user ID is not provided
    header("Location: index.php");
    exit;
}
