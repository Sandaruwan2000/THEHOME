<?php


// database connect
include "db_conn.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Construction_type = $_POST['Construction_type'];
    $Land_Size = $_POST['Land_Size'];
    $Budget = $_POST['Budget'];

    // File upload handling
    if (isset($_FILES['image'])) {
        $image = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $target_path = 'upload/' . $image;

        // Check if a file was selected for upload
        if (!empty($image) && move_uploaded_file($temp_name, $target_path)) {
            // Insert the data into the database
            $sql = "INSERT INTO `plan`(`id`, `name`, `email`, `Construction_type`, `Land_Size`, `image`, `Budget`) 
            VALUES (NULL, '$name', '$email', '$Construction_type', '$Land_Size', '$image', '$Budget')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location: view.php?msg=New record created successfully");
                exit;
            } else {
                echo "Failed: " . mysqli_error($conn);
            }
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "No file selected.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    
    
    <link rel="stylesheet" href="project.css">
    <link rel="stylesheet" href="footer.css" >
</head>
<body>

<?php
include "header.php" ;
?>  
<div class=em >
    <form action="" method="post" class="pform" enctype="multipart/form-data" onsubmit="myFunction()">
        <table class="ptable" >
            <tr>
                <td>Name:</td>
                <td><input type="text" id="name" name="name" required></td>
            </tr>
            <tr>
                <td><br>Email:</td>
                <td><br><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><br>Construction type:</td>
                <td><br>
                    <select id="Construction_type" name="Construction_type" required>
                        <option value="Home">Home</option>
                        <option value="Factory">Factory</option>
                        <option value="Hotel">Hotel</option>
                        <option value="Religions">Religions</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><br>Land Size:</td>
                <td><br><input type="text" id="Land_Size" name="Land_Size" placeholder="Perch" required></td>
            </tr>
            <tr>
                <td><br>Plan:</td>
                <td><br><input type="file" id="plan" accept=".jpg, .jpeg, .png" name="image" required> </td>
            </tr>
            <tr>
                <td><br>Budget:</td>
                <td><br><input type="text" id="Budget" name="Budget" placeholder="Rs" required></td>
            </tr>
            <tr>
                <td><br><button type="submit" name="submit" value="submit">Submit</button></td>
            </tr>
        </table>
    </form>

    
    <script>//script masseage 
            function myFunction() {
            alert("The form was submitted");
            }
    </script>

    <a href="view.php"><button type="View" value="View" class="view">View Report</button></a>
</div>
<footer class="footer" style="position: relative;top:px;">
        <img src="img/newlogo.png" class="logo">
        
    </footer>
</body>
</html>