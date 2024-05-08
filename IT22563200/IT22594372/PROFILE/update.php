<?php
// database connect
include "plan.config.php";

$id = $_GET['updateid'];

if (isset($_POST['submit'])) {
    // File upload handling
    if (isset($_FILES['plan'])) {
        $image = $_FILES['plan']['name'];
        $temp_name = $_FILES['plan']['tmp_name'];
        $target_path = 'upload/' . $image;

        $Budget = $_POST['budget'];

        // Check if a file was selected for upload
        if (!empty($image) && move_uploaded_file($temp_name, $target_path)) {
            // Insert the data into the database
            $sql = "UPDATE `draw` SET plan='$image', budget='$Budget' WHERE id=$id";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                header('Location: plan_table.php');
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
    
    <div class="em">
        <form action="" method="post" class="pform" enctype="multipart/form-data" onsubmit="myFunction()">
            <table class="ptable">
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

        <script>
            function myFunction() {
                alert("The form was updated");
            }
        </script>

    </div>
   
</body>
</html>

