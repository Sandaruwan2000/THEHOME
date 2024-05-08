<?php
// database connect
include "db_conn.php";

$id = $_GET['updateid'];

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
            $sql = "UPDATE `plan` SET name='$name', email='$email', Construction_type='$Construction_type', 
            Land_Size='$Land_Size', image='$image', Budget='$Budget' WHERE id=$id";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                header('location:view.php') ;
                //echo "Update successful";
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
</head>
<body>
    <?php include "header.php"; ?>

    <div class="em">
        <form action="" method="post" class="pform" enctype="multipart/form-data"  onsubmit="myFunction()"><?php //js function
?>
            <table class="ptable">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" id="name" name="name"></td>
                </tr>
                <tr>
                    <td><br>Email:</td>
                    <td><br><input type="email" id="email" name="email"></td>
                </tr>
                <tr>
                    <td><br>Construction type:</td>
                    <td><br>
                        <select id="Construction_type" name="Construction_type">
                            <option value="Home">Home</option>
                            <option value="Factory">Factory</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Religions">Religions</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><br>Land Size:</td>
                    <td><br><input type="text" id="Land_Size" name="Land_Size" placeholder="Perch"></td>
                </tr>
                <tr>
                    <td><br>Plan:</td>
                    <td><br><input type="file" id="plan" accept=".jpg, .jpeg, .png" name="image"></td>
                </tr>
                <tr>
                    <td><br>Budget:</td>
                    <td><br><input type="text" id="Budget" name="Budget" placeholder="Rs"></td>
                </tr>
                <tr>
                    <td><br><button type="submit" name="submit" value="submit">Update</button></td>
                </tr>
            </table>
        </form>

        <script>//js masseage
            function myFunction() {
            alert("The form was updated");
            }
    </script>

    </div>

    <?php include "footer.php"; ?>  
</body>
</html>
