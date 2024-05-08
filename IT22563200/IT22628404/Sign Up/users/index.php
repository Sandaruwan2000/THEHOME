<?php
// Include database connection file
include_once "../db_config.php";

// Check if a message and success parameter exist in the URL
if (isset($_GET['message']) && isset($_GET['success'])) {
    $message = $_GET['message'];
    $success = $_GET['success'];
}

// Retrieve users from the database
$query = "SELECT * FROM singup";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Listing</title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <script>
        // Function to display the alert message
        function showAlert(message, isSuccess) {
            var alertElement = document.getElementById("alert");
            alertElement.innerText = message;
            alertElement.className = isSuccess ? "alert success" : "alert failure";
            alertElement.style.display = "block";
            setTimeout(function() {
                alertElement.style.display = "none";
            }, 3000);
        }

        // Function to confirm user deletion
        function confirmDelete(userId) {
            var confirmation = confirm("Are you sure you want to delete this user?");
            if (confirmation) {
                // Redirect to delete.php to delete the user
                window.location.href = "delete.php?id=" + userId;
            }
        }
    </script>
</head>

<body>
    <h1>User Listing</h1>
    <div id="alert" class="alert" style="display: none;"></div>
    <?php
    // Display the alert message if it exists
    if (isset($message) && isset($success)) {
        echo '<script>showAlert("' . $message . '", ' . $success . ');</script>';
    }
    ?>


    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>User Role</th>
            <th>Actions</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["full_name"]; ?></td>
                <td><?php echo $row["username"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["user_role"]; ?></td>
                <td>
                    <a class="edit-button" href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                    <a class="delete-button" href="#" onclick="confirmDelete(<?php echo $row["id"]; ?>)">Delete</a>
                </td>
            </tr>
        <?php } ?>

    </table>

</body>

</html>