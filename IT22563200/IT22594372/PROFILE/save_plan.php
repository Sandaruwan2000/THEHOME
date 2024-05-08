<?php
// save_plan.php

require_once 'plan.config.php';

if (isset($_POST['submit'])) {
    
  
   // Process the uploaded file
   $image = $_FILES['image']['name'];
   $imageTmp = $_FILES['image']['tmp_name'];
   $imagePath = 'uploads/' . $image;
   move_uploaded_file($imageTmp, $imagePath);
    
   $budget = $_POST['Budget'];

    

    // Insert the form data into the database
    $sql = "INSERT INTO draw ( plan, budget) VALUES ( '$image', '$budget')";
    if (mysqli_query($conn, $sql)) {
        echo "Data saved successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
