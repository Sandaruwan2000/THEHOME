<?php
// Include database connection file
include_once "../db_config.php";

// Check if the user ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve user details from the database
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit profile</title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
</head>

<body>
    <div class="mt-100 container ">
        <h2>Edit User</h2>

       

            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>" required>

            <label>Username:</label>
            <input type="text" name="username" value="<?php echo $row['username']; ?>" required>

            <form method="POST" action="update.php">
            <input type="hidden" name="User Id" value="<?php echo $row['userid']; ?>">


            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

            <label>Phone Number:</label>
            <input type="phonenumber" name="phonenumber" value="<?php echo $row['phonenumber']; ?>" required>


            
            <input type="submit" value="Edit">
        </form>
    </div>
</body>

</html>

