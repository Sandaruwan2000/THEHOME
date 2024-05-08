<?php

require "config.php";
      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message= $_POST['message'];
       
        
        

    $sql = "INSERT INTO 'users'('name','email','message') VALUES ('$name','$email','$message')";

    if ($conn->query($sql)) {
		// alert box
        echo '<script>alert("Thank You for Contacting Us!");</script>';
    } 
    else {
        echo "Error: <br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>