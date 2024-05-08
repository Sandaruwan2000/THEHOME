<?php
// Include database connection file
include_once "../db_config.php";

// Check if the user ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve user details from the database
    $query = "SELECT * FROM singup WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
</head>

<body>
     <div class="mt-100 container ">
        <h2>Edit User</h2>

        <form method="POST" action="update.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label>Full Name:</label>
            <input type="text" name="full_name" value="<?php echo $row['full_name']; ?>" required>

            <label>Username:</label>
            <input type="text" name="username" value="<?php echo $row['username']; ?>" required>

            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

            <label>User Role:</label>
            <select name="user_role" required>
                <option value="admin" <?php if ($row['user_role'] == 'admin') echo 'selected'; ?>>Admin</option>
                <option value="manager" <?php if ($row['user_role'] == 'manager') echo 'selected'; ?>>Manager</option>
                <option value="supervisor" <?php if ($row['user_role'] == 'supervisor') echo 'selected'; ?>>Supervisor</option>
                <option value="customer" <?php if ($row['user_role'] == 'customer') echo 'selected'; ?>>Customer</option>
            </select>

            <input type="submit" value="Update">
        </form>
    </div>
</body>

</html>